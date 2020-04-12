#!/usr/bin/python3.7
import mysql.connector
import os
from tinytag import TinyTag

# Functions Declaration Area


def Diff(li1, li2):
    return (list(set(li1) - set(li2)))





# Variable Declaration Area
prev_music = []
current = []
added = []
removed = []
trackTitle = ""
albumArtist = ""
trackArtist = ""
albumName = ""
diskNumber = ""
trackNumber = ""
albumYear = ""
albumGenre = ""
mydb = mysql.connector.connect(
    host="localhost",
    user="Mohammed",
    passwd="Mohammed"
)

def write_the_Music_File():
    prev = open('/mnt/Files/.prev/Music', 'w')
    for f in current:
        prev.write(f+"\n")
    prev.close()

with open('/mnt/Files/.prev/Music') as f:
    prev_music = [line.rstrip('\n') for line in f]

# r=root, d=directories, f = files
for r, d, f in os.walk('/mn/Files/Music/'):
    for file in f:
        if '.m4a' in file:
            current.append(os.path.join(r, file))
        elif '.mp3' in file:
            current.append(os.path.join(r, file))
        elif '.flac' in file:
            current.append(os.path.join(r, file))

removed = Diff(prev_music, current)
added = Diff(current, prev_music)

if len(removed) > 0:
    print("hello Removed")
if len(added) > 0:
    print("hello Added")
write_the_Music_File();
