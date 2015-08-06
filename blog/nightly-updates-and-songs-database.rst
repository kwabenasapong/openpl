.. title: Nightly updates and Songs Database.
.. slug: 2011/12/13/nightly-updates-and-songs-database
.. date: 2011-12-13 18:12:55 UTC
.. tags: 
.. description: 

Changes have been made to the songs plugin to give users the ability to
edit songs in a service when the "Add missing Songs when Opening
Service" option is disabled. In the past, this was not possible.

This has meant that we needed to make a change to the songs database to
protect the database. Thanks to the new internal upgrade system, you do
not need to make the change yourself, OpenLP will do so automatically.
In addition to this, the songs plugin will be disabled if the version of
the database is newer than the version the code expects.

This will only impact people using nightly builds who have a number of
copies of the code or who copy the database between different machines
and the database has been updated. It will also impact anyone who tries
to install an older version of OpenLP after using the latest nightly
build.

It is recommended that you first backup your songs database if you think
you may need to downgrade to 1.9.7 or an older nightly build after
installing the latest nightly build.
