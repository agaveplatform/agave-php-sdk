#!/bin/bash

# define pwd
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

# where is swagger codegen dir?
SWAGGER_CODEGEN_HOME=${SWAGGER_CODEGEN_HOME:-$HOME/agave/tooling/swagger-codegen}

# output directory
OUTDIR="${SWAGGER_CODEGEN_HOME}/out"

if [ ! -e "$OUTDIR" ]; then
  echo "Creating output directory $OUTDIR"
  mkdir -p $OUTDIR
else
  echo "Using existing output directory $OUTDIR"
fi

# delete existing source files in outdir
echo "Deleting existing souce files in output source directory ${OUTDIR}/agave-php-sdk/src"
rm -rf ${OUTDIR}/agave-php-sdk/src ${OUTDIR}/agave-php-sdk/test rm -rf ${OUTDIR}/agave-php-sdk/docs

# build vanilla client sdk using custom templates
echo "Running swagger codegen to build vanilla client sdk using custom templates"
java -jar ${SWAGGER_CODEGEN_HOME}/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar \
      generate \
      -i ${SWAGGER_CODEGEN_HOME}/agave.json \
      -l php \
      -t ${DIR}/codegen/templates \
      -o $OUTDIR \
      -c ${DIR}/codegen-config.json


# filter the source files for html encoded characters from the swagger def
echo "Cleaning up generated source files."
for i in `find ${OUTDIR}/agave-php-sdk/src -name '*.php'`;
do
  sed -i .0 "s/^#&#39;/#'/g" $i
  rm -f $i.0
done

# copy over custom template files
if [[ 0 -lt "$(ls ${DIR}/codegen/custom | wc -l)" ]]; then
  echo "Copying custom SDK files to output source directory ${OUTDIR}/agave-php-sdk/src "
  cp -f ${DIR}/codegen/custom/* ${OUTDIR}/agave-php-sdk/src/
fi

if [[ -e "$DIR/src.bak" ]]; then
  echo "Removing existing backup folder"
  rm -rf $DIR/src.bak
  rm -rf $DIR/docs.bak
  rm -rf $DIR/test.bak
fi

if [[ -e $DIR/src ]]; then
  echo "Backing up existing distribution folder"
  cp -rf $DIR/src $DIR/src.bak
  cp -rf $DIR/docs $DIR/docs.bak
  cp -rf $DIR/test $DIR/test.bak

  # clearing contents rather that removing directory in
  # case we have the folder volume mounted to a dev container
  rm -rf $DIR/src/* $DIR/docs/* $DIR/test/*
else
  mkdir -p $DIR/src
  mkdir -p $DIR/docs
  mkdir -p $DIR/test
fi

echo "Moving output source to project source directory"
cp -rf ${OUTDIR}/agave-php-sdk/src/* $DIR/src

echo "Moving output docs to project source directory"
cp -rf ${OUTDIR}/agave-php-sdk/docs/* $DIR/docs

echo "Moving output tests to project source directory"
cp -rf ${OUTDIR}/agave-php-sdk/test/* $DIR/test
