.. title: Two Quick Converters
.. slug: 2010/04/07/two-quick-converters
.. date: 2010-04-07 13:04:34 UTC
.. tags: 
.. description: 

A while ago I wrote two scripts as part of the OpenLP 2.0 rewrite, to
convert the openlp.org 1.0 songs database and bible files to OpenLP 2.0
format. Unfortunately these scripts were Linux/Unix-only until recently,
because I couldn't get the SQLite 2.8 module for Python compiled on
Windows.

However, Jonathan Corwin did some digging, and found out how to do it,
and so I've compiled those two scripts into two stand-alone command line
executables for Windows. We'll eventually include both songs and Bible
imports in OpenLP 2.0, but for the moment, you can use these two command
line apps to convert your databases for you.

Songs: openlp-1to2-converter.exe

Bibles: bible-1to2-converter.exe

How to use them:

Both scripts support a "--help" parameter, which provides you with the
usage of the script, and extra parameters that you can pass to the
scripts.

::

    C:\> openlp-1to2-converter.exe --helpUsage: openlp-1to2-converter.exe [options] OLDDATABASE NEWDATABASEOptions: -h, --help       show this help message and exit -o, --overwrite  Overwrite database file if it already exists. -v, --verbose    Outputs additional progress data. -d, --debug      Outputs raw SQL statements (overrides verbose).

Note that the songs database is "songs.sqlite" and is found in
C:/Documents and Settings/<username>/Application Data/openlp/data/songs
on Windows XP. Bibles are "Version\_Name.sqlite" and found in
C:/Documents and Settings/<username>/Application
Data/openlp/data/bibles.
