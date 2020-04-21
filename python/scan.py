import mysql.connector
import os
from tinytag import TinyTag
import hashlib
import time
# import cv2 as cv
import numpy as np
import subprocess
import re

# Functions Declaration Area
def Diff(li1, li2):
  return (list(set(li1) - set(li2)))

def escaped_string(string):
  return string.translate(str.maketrans({" ": r"\ "}))

def write_the_Music_File(current):
  prev = open('/mnt/Files/.prev/Music', 'w')
  for f in current:
    prev.write(f+"\n")
  prev.close()

def split_artists(albumartsits,artist):
  array = re.split(',|&',albumartsits)
  array += re.split(',|&',artist)
  final = []
  for i in array:
    final.append(i.strip())
  final = list(set(final))
  return final

def split_artist(artist):
  # array = re.split(',|&',albumartsits)
  array = []
  if "W&W" not in artist:
    array = re.split(',|&',artist)
  else :
    array.append("W&W")
    array += re.split(',|&',re.sub("W&W","",artist))
    array[:] = [x for x in array if x.strip()]
  final = []
  for i in array:
    final.append(i.strip())
  # final = list(set(final))
  return final

# Variable Declaration Area
# prev_music = []
current = []
# added = []
# removed = []

#AlbumTable stuff
albumID = ""
albumName = ""
CD_Number = ""
TotalTracks = ""
Genre = ""
Release_Year = ""
FrontCover_Path = ""
# ArtistTable Stuff
#.....


trackTitle = ""
albumArtist = ""
trackArtist = ""
mydb = mysql.connector.connect(
  host="localhost",
  user="Mohammed",
  passwd="Mohammed",
  database="web"
)

def write_the_Titles_File(current):
  prev = open('/mnt/Files/.prev/Titles', 'w')
  for f in current:
    prev.write(f.title+"\n")
  prev.close()

def write_the_Albums_File(current):
  prev = open('/mnt/Files/.prev/Albums', 'w')
  for f in current:
    prev.write(f+"\n")
  prev.close()

def write_the_dub(current):
  prev = open('/mnt/Files/.prev/dub', 'w')
  for f in current:
    prev.write(f+"\n")
  prev.close()

def escape(string):
  escaped_string = string.replace("(","\\(").replace(")","\\)").replace(" ","\\ ")
  return escaped_string

# with open('/mnt/Files/.prev/Music') as f:
  # prev_music = [line.rstrip('\n') for line in f]
flac = []
# r=root, d=directories, f = files
for r, d, f in os.walk('/mnt/Files/Music/'):
  for file in f:
    if '.m4a' in file:
      current.append(os.path.join(r, file))
    elif '.mp3' in file:
      current.append(os.path.join(r, file))
    elif '.flac' in file:
      flac.append(os.path.join(r, file))
# array = []
# c=1
# for i in current:
#   e = TinyTag.get(i)
#   albumName = e.album
#   if (albumName)
#   escaped_i = escape(i)
#   print (escaped_i)
#   time.sleep(10)
#   albumName = escaped_string(albumName)
#   os.system("ffmpeg -i '" + i + "' '/mnt/Files/.AlbumImages/" + albumName +".jpeg'"+ " &> /dev/null")
#   print(c)
#   c+=1


c=1
titles = []
mycursor = mydb.cursor()
duplicate = []
# TODO
check = "SELECT * FROM SongArtistTable WHERE SongID=%s AND AlbumID=%s AND SongPath=%s AND ArtistID=%s"
sql = "INSERT INTO SongArtistTable Values(%s,%s,%s,%s)"
for f in current:
  mycursor = mydb.cursor(buffered=True)
  e = TinyTag.get(f)
  # print(f)
  # title = e.title
  artist = e.artist
  path = re.sub("/mnt/Files/Music/","http://localhost:9000/",f)
  ID = hashlib.md5(str.encode(e.title)).hexdigest()
  # albumArtist = e.albumartist
  # disc = e.disc
  # genre = e.genre
  # track_Number = e.track
  albumID = hashlib.md5(str.encode(e.album)).hexdigest()
  # insert_cursor = mydb.cursor(buffered=True)
  # val = (ID,albumID,path,title,track_Number,disc,genre)
  # insert_cursor.execute(sql,val)
  # mydb.commit()
  # insert_cursor.close()
  # print(c)
  # c+=1
  # val = (ID,albumID)
  # mycursor.execute(check,val)
  artist = split_artist(artist)
  for i in artist:
    artistID = hashlib.md5(str.encode(i)).hexdigest()
    val = (ID,albumID,path,artistID)
    mycursor.execute(check,val)
    if (mycursor.rowcount !=0):
      duplicate.append(f)
      continue
    insert_cursor = mydb.cursor(buffered=True)
    # insert_cursor = mydb.cursor()
    val = (ID,artistID,path,albumID)
    insert_cursor.execute(sql,val)
    mydb.commit()
    insert_cursor.close()
  print(c)
  c+=1
write_the_dub(duplicate)
  # trackArtist = e.artist
# TODO
  # albumID = hashlib.md5(str.encode(e.album)).hexdigest()
  # albumName = e.album
  # TODO
  # array = split_artist(albumArtist)
  # for i in array:
  #   val = (albumID,hashlib.md5(str.encode(i)).hexdigest())
  #   mycursor.execute(check,val)
  #   if (mycursor.rowcount !=0):
  #     continue
    # insert_cursor = mydb.cursor(buffered=True)
  #   val = (albumID,hashlib.md5(str.encode(i)).hexdigest())
  #   insert_cursor.execute(sql,val)
  #   mydb.commit()
  #   insert_cursor.close()
  #   print(c)
  #   c+=1

  # mycursor.close()
  # mycursor = mydb.cursor()
  # print(escape(albumName))
  # time.sleep(10)
  # CD_Number = e.disc_total
  # TotalTracks = e.track_total
  # Genre = e.genre
  # Release_Year = re.findall("\d{4}",e.year)[0]

  # escaped_albumname = escape(albumName)
  # os.system("ffmpeg -stdin -i "+escape(f)+" /mnt/Files/.AlbumImages/"+escape(albumName)+".jpeg")
  # subprocess.call(["ffmpeg","-stdin","-i",escape(f),"/mnt/Files/.AlbumImages/"+escape(albumName)+".jpeg"],shell=True)
  # cv.imwrite("/mnt/Files/.AlbumImages/"+albumName+".jpeg",e.get_image())
  # FrontCover_Path = "http://localhost:9001/"+albumName+".jpeg"

# id=""
# name=""
# mydb.close()


# write_the_Titles_File(tags)
# for f in titles:
  # hash.append(hashlib.md5(str.encode(f)))
  # print(f.title)
  # hash.append(hashlib.md5(str.encode(f)))
# print ("Bye")
# for i in range(0,len(current),1):
  # for j in range(i+1, len(current),1):
    # if (hash[i] == hash [j]):
      # print("Hello World")
# print (hash[0].hexdigest())
# print (len("e7b9e794c17be5a5b31be9a5f281adbe"))
# print("HI")
# removed = Diff(prev_music, current)
# added = Diff(current, prev_music)

# if len(removed) > 0:
#     print("hello Removed")
# if len(added) > 0:
#     print("hello Added")
# write_the_Music_File();


# print(len(current))
# time.sleep(10)
# Get the names of the titles
# with open('/mnt/Files/.prev/Titles') as f:
  # titles = [line.rstrip('\n') for line in f]
# TODO
