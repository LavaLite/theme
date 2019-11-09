#
# This will split up each Lavalite theme to its own github repo
#

./git-subsplit.sh init git@github.com:lavalite/themes.git
./git-subsplit.sh publish  --heads="master" --tags="v5.1.3" admin:git@github.com:Litecms/Admin.git
./git-subsplit.sh publish  --heads="master" --tags="v5.1.3"  public:git@github.com:Litecms/Public.git
./git-subsplit.sh publish  --heads="master" --tags="v5.1.3"  client:git@github.com:Litecms/Client.git
rm -rf .subsplit/