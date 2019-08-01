
#! /bin/bash

while getopts "p:" opt; do
	case ${opt} in
		p )
			PROJECT_DIR=${OPTARG}
			;;
	esac
done

# Establish symbolic links for the following directories:
# the media folder
rm -rf media
ln -s ../media/${PROJECT_DIR} media
# the download folder
rm -rf download
ln -s ../downloads/${PROJECT_DIR} download
# the cms folder
rm -rf cms
ln -s ../${PROJECT_DIR}-cms cms
# # the BFS theme folder for the CMS
cd ../${PROJECT_DIR}-cms/wp-content/themes
rm bfs
ln -s ../../../${PROJECT_DIR}/resources/wordpress-theme bfs
cd ../..
wp --allow-root theme activate bfs
cd ../${PROJECT_DIR}
