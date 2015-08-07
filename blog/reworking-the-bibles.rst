.. title: Reworking the Bibles
.. slug: 2007/10/20/reworking-the-bibles
.. date: 2007-10-20 12:10:50 UTC
.. tags: 
.. description: 

We've run into a couple of unforseen problems with the Bibles. Some
translations use different names for some books. Some translations are
not english, and so ALL their books have "different" names! So I'm
rewriting how the Bibles work. We used to have an abbreviations file
which we'd use when you're doing a Bible search using a book's
abbreviation, and then the full search version of the Bibles page used
to use that abbreviations file for it's lookup list.

So now we're making the Bibles self-contained. Each Bible file will
contain it's own abbreviation table, and instead of doing a text lookup
on the name of the book in the verses table, we'll get the id of the
book from the abbreviation table (which has become a fully-fledged book
table) and use that for the lookup.

So, for those interested, here are the create statements (SQLite) for
the tables in the new format Bible files:

.. code:: SQL

    CREATE TABLE testament (
        id INTEGER PRIMARY KEY NOT NULL,
        name VARCHAR(30) NOT NULL
    )

    CREATE TABLE book (
       id INTEGER PRIMARY KEY NOT NULL,
       testament_id INTEGER NOT NULL DEFAULT 1,
       name VARCHAR(30) NOT NULL,
       abbreviation VARCHAR(5)
    )

    CREATE TABLE verse (
       id INTEGER PRIMARY KEY NOT NULL,
       book_id INTEGER NOT NULL DEFAULT 1,
       chapter INTEGER NOT NULL DEFAULT 1,
       verse INTEGER NOT NULL DEFAULT 1,
       text BLOB
    )

What's great about this new format is that if you are Spanish, you can
have all the names of the books in Spanish! So not only do you get
openlp.org in Spanish (through the Language interface) but you can also
have the Bible in Spanish.

Ok, let me get back to openlp.org...
