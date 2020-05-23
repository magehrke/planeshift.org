Folder: 'quest-details-psext-raw'

This folder contains only files which ends with .txt (except this readme).
These files can be read by a java program which converts them to .psq
files ('PSExtToPsq').

The origin of the files is from the PSExtended extension, which has the
option to log the quests, which you do in game. After the logging, the 
files should be dragged into this folder 'quest-details-psext-raw'. Then
the java class 'PSExtToPsq' should be run, which converts all quests
which lie inside this raw folder and saves it into the 
'quest-details-psext-psq' folder.

Attention: Only those quests will be converted and saved, which haven't
been converted yet. So if you want to convert a quest again (after
adding some raw details, etc.), you have to delete the version in this
'quest-details-psext-psq'.

If you have converted a file, you can delete it or keep it for 
backup.
