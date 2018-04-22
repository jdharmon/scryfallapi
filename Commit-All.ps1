param (
	[Parameter(Mandatory=$true)]
	$Message
)

foreach ($repo in (ls -Directory)) {
	pushd $repo
    $status = git status -s
	if ($status) {
		Write-Host -ForegroundColor Cyan "Committing changes in $repo"
		git add .		
		git commit -m $Message
	}
	popd
	git add .
	git commit -m $Message
}
