ls -Directory | rm -Recurse
docker run --rm -w /var/autorest -v ${PWD}:/var/autorest azuresdk/autorest