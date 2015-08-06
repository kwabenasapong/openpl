.. title: Is there hope for CCLI SongSelect integration?
.. slug: 2008/08/31/is-there-hope-for-ccli-songselect-integration
.. date: 2008-08-31 14:08:48 UTC
.. tags: 
.. description: 

As many folks know, the CCLI SongSelect importer in openlp.org has been
disabled due to problems with the service. What many people don't know
is that all the applications out there that interface with SongSelect
are actually pretending to be web browsers, and are painstakingly
pulling the information out of the SongSelect web pages.

The reason openlp.org (and many other presentation applications) stopped
working with SongSelect was because CCLI was busy moving their systems
from a ColdFusion-based setup to an ASP.NET-based setup (to be honest,
I'm not sure if that's an improvement). I took a look at SongSelect
again today, and it seems like they have finished the conversion and are
now in full swing with the ASP.NET system.

This is both good news and bad news for us. The good news is that it
means that we can integrate with SongSelect again. The bad news is that
ASP.NET is a terrible system (for reasons I won't go into right now) and
it's gonna take a very long time to get the SongSelect integration
working again.

We're going to look into getting it going for release with openlp.org
1.2, but unfortunately we can't make any promises.
