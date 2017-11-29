#
# This will split up each Lavalite theme to its own github repo
#

./git-subsplit.sh init git@github.com:lavalite/themes.git
./git-subsplit.sh publish admin:git@github.com:Litecms/Admin.git
./git-subsplit.sh publish user:git@github.com:Litecms/User.git
./git-subsplit.sh publish public:git@github.com:Litecms/Public.git
./git-subsplit.sh publish public:git@github.com:Litecms/Client.git
rm -rf .subsplit/