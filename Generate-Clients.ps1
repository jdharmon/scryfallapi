ls -Directory | ls | % { rm -Recurse -Exclude .git*, *.md $_.FullName }
docker run --rm -w /var/autorest -v ${PWD}:/var/autorest azuresdk/autorest