#
# This will split up each Lavalite theme to its own github repo
#

./git-subsplit.sh init git@github.com:lavalite/themes.git
./git-subsplit.sh publish  --heads="develop master" --tags="v7.0.1" default:git@github.com:Litecms/theme-default.git
rm -rf .subsplit/