.. title: **FLAG DAY** Database schema changes in trunk revision 956
.. slug: 2010/07/20/flag-day-database-schema-changes-in-trunk-revision-956
.. date: 2010-07-20 19:07:55 UTC
.. tags: 
.. description: 

Revision 956 commits code to change the database schema for the way song
information is stored.  This is to fix a previous oversight with
alternative titles (they work and are stored correctly now) and to add
the ability to link media files to songs.

When updating to this or any later revision **your old database will
crash OpenLP**.  To prevent this from happening:

-  Move or rename your existing database (in ~/.openlp/data/songs or
   ~/.local/share/openlp/songs on Linux or
   %APPDATA%\\openlp\\data\\songs on Windows)
-  Open OpenLP to automatically create a database with the new schema
-  Import your old data by selecting  File -> Import -> OpenLP v2 Songs 
   from the menu in the top left of OpenLP
-  Find your old database and click Open
-  Your data will be imported.  **This may take a while with no visible
   progress feedback.**
-  When the import is finished a message box will say this is the case.

Being able to play tracks with songs is one of the few remaining version
1 features left to implement in version 2 and this change allows us to
start building that feature.
