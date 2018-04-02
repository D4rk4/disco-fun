#!/bin/bash
root="/export/tmp"
for d in ${root}/mp3/* ; do
        id=`echo ${d} | awk '{print $1}' | cut -f5 -d/|bc`
        ffmpeg -y -i "${d}" -ac 1 -ar 8000 -codec:a pcm_mulaw ${root}/711/${id}.au
done
