import mysql.connector
import os
from tinytag import TinyTag

path = '/mnt/0669151d-bc33-44e6-a48d-a720c18ee6a0/Music/'

files = []
# r=root, d=directories, f = files
for r, d, f in os.walk(path):
    for file in f:
        if '.m4a' in file:
            files.append(os.path.join(r, file))
        elif '.mp3' in file:
            files.append(os.path.join(r, file))
        elif '.flac' in file:
            files.append(os.path.join(r, file))
artists = []
fil=open("/mnt/0669151d-bc33-44e6-a48d-a720c18ee6a0/albums.txt","a")
for f in files:
    s=TinyTag.get(f)
    s=s.album
    if s not in artists:
        artists.append(s)
        print(s)
        fil.write(s + "\n")
fil.close()