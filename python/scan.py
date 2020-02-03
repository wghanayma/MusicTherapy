import mysql.connector
import os
from tinytag import TinyTag

#Functions Declaration Area
def Diff(li1, li2): 
    return (list(set(li1) - set(li2)))

def write_the_Music_File():
    prev=open('/mnt/0669151d-bc33-44e6-a48d-a720c18ee6a0/.prev/Music','a')
    for f in current:
        prev.write(f+"\n")
    prev.close()

#Variable Declaration Area
prev_music=[]
current = []
added=[]
removed=[]
trackTitle=""
albumArtist=""
trackArtist=""
albumName=""
diskNumber=""
trackNumber=""
albumYear=""
albumGenre=""
mydb = mysql.connector.connect(
  host="localhost",
  user="yourusername",
  passwd="yourpassword"
)

with open('/mnt/0669151d-bc33-44e6-a48d-a720c18ee6a0/.prev/Music') as f:
    prev_music=[line.rstrip('\n') for line in f]

# r=root, d=directories, f = files
for r, d, f in os.walk('/mnt/0669151d-bc33-44e6-a48d-a720c18ee6a0/Music/'):
    for file in f:
        if '.m4a' in file:
            current.append(os.path.join(r, file))
        elif '.mp3' in file:
            current.append(os.path.join(r, file))
        elif '.flac' in file:
            current.append(os.path.join(r, file))

removed=Diff(prev_music,current)
added=Diff(current,current)
if len(removed)>0:

if len(added)>0:
