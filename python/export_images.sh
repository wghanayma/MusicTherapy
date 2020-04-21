#!/bin/bash

while IFS = read -r -d '' file;do
  ffmpeg -i "${file}" ""
done < $(find /mnt/Files/Music -name '*.m4a' -or -name '*.mp3' -or -name '*.flac')
# for f in $(find /mnt/Files/Music -name '*.m4a' -or -name '*.mp3' -or -name '*.flac');
# do
# echo $f
#ffmpeg -i $f /mnt/Files/.AlbumImages/"+escape(albumName)+".jpeg &> /dev/null
# done