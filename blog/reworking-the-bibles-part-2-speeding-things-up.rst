.. title: Reworking the Bibles, part 2: Speeding things up.
.. slug: 2007/10/23/reworking-the-bibles-part-2-speeding-things-up
.. date: 2007-10-23 20:10:35 UTC
.. tags: 
.. description: 

Since I've been redoing the Bibles, I've been selecting ridiculously
large ranges of verses to test out my other code, and I've been getting
fed up with how long it took to fetch all the verses in order to display
them.

Let me explain a bit of the process first. When you do a search for
verses, it doesn't actually fetch the verses at that time. It just runs
through the database and sees how many verses there are, and then shows
that to you. Only when you use the "Preview," "Go Live!" or "Add to
order of service" does openlp.org actually fetch the text of the verses.

So what would happen is that I would select about 8 chapters' worth of
verses, which amounts to about 150 to 200 verses, and when I clicked on
"Preview" it would take anything from 30 seconds to more than a minute
to fetch those verses. Nope, that's not satisfactory for me, I decided.
So this evening I sat down and decided to rewrite the code completely.

The rewritten code is definitely more complicated than the old code, but
now instead of fetching each and every verse by itself, my code writes a
bit of a crazy SQL query, which then fetches all the verses at once. A
much more elegant solution, and MUCH faster. It now takes less than 5
seconds to fetch those 150 to 200 verses.

Unfortunately most of you will probably not notice much of a difference.
I think most passages are only a few verses long... usually no longer
than about 20 verses, so the performance gain will not be significant.
However, it should be far faster now for the minority who like to read
300 verses in a go .
