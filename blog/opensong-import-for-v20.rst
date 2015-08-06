.. title: OpenSong import for v2.0
.. slug: 2010/07/19/opensong-import-for-v20
.. date: 2010-07-19 20:07:15 UTC
.. tags: 
.. description: 

Finally - I found time to write some code!  We can now import OpenSong
format songs to the development version of OpenLP2 (as of revision 951)

It will import from straight text files, or from ZIP files containing
loads of OpenSong files.  Note that, unfortunately, there's something
weird about importing files with non-ascii characters in their filenames
from zipfiles which I haven't got to the bottom of yet.  This causes the
importer to die horribly with unicode errors.. so that's next on the
list to fix!

Anyway, testers - have at it!
