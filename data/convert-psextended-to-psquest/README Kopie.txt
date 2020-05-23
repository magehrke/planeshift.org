Folder: 'quest-details-psext-psq'

This folder contains only files which ends with .psq (except this readme).
These files can be read by the java program, which converts the quests
to php.

The origin of the files is from the PSExtended extension, which has the
option to log the quests, which you do in game. After the logging, the 
files should be dragged into the folder 'quest-details-psext-raw'. Then
the java class 'PSExtToPsq' should be run, which converts all quests
which lie inside the raw folder and saves it into the psq folder.

Attention: Only those quests will be converted and saved, which haven't
been converted yet. So if you want to convert a quest again (after
adding some raw details, etc.), you have to delete the version in this
folder ('quest-details-psext-psq').
