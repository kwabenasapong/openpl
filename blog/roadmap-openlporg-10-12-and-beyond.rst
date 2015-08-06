.. title: Roadmap: openlp.org 1.0, 1.2, and beyond...
.. slug: 2008/01/14/roadmap-openlporg-10-12-and-beyond
.. date: 2008-01-14 19:01:01 UTC
.. tags: 
.. description: 

I was going to reply to the Cairo graphics library topic in the
discussion forums, but my answer started getting too long, and I decided
to rather blog about the roadmap of openlp.org, since in essence that's
what was being proposed in that forum topic.

Full steam ahead for version 1.0!

So, our top priority at the moment is version 1.0, and getting it out
the door at the end of this month. We have indeed worked long and hard
on openlp.org, to get it to a state where it is a stable, reliable,
feature-full application that contains the features that 90% of churches
out there are going to need on a Sunday.

So, no more features, just bug fixes, and then out the door with version
1.0.

Version 1.2: Featuritis is the name of the game!

Next up on the list is version 1.2. Internally, there are a number of
improvements that can be made to openlp.org. While they won't
necessarily seem to make a difference externally, it will make our lives
developing and maintaining openlp.org easier. Once we're done with the
code clean up, we'll start entertaining feature requests again.

Of course, we will do our best to incorporate as many of the new feature
requests as possible, but some will fall by the wayside. We need to be
realistic. Once again, version 1.2 will only run on Windows. We realise
that there have been a large number of requests for a cross platform
version, but the current version of openlp.org is tied down to Windows.
There's no way we can convert it to a cross platform version.

Cross platform, coming right up in version 2.x!

A while back I started thinking about a cross-platform version of
openlp.org. However, I didn't see that much of a demand, and since I was
rather involved in getting version 1.0 going, I was glad I didn't have
to think about it.

Over the years, however, we've had request after request:

-  "Does it work on Mac OS X?"
-  "I downloaded openlp.org, but I can't run it in Linux"

So, we're definintely going to develop a cross platform version. There's
just one problem: it has to be from scratch. As I mentioned before,
openlp.org currently is not portable at all. It's glued firmly to
Windows.

The cross platform version will most probably be written in C++,
although I've entertained the idea of using Python. We're not there yet,
so I'm still thinking about it (and I'd love to have your input on it,
if you've got anything to say on the matter). We'll also use one of the
cross platform graphics libraries, like SDL or Cairo, so that openlp.org
becomes truly platform-independent.

**Update:** At a developer meeting we decided to use Python, as it would
be simpler and easier to implement a plugin system.

Of course because we have to rewrite openlp.org from scratch, openlp.org
2.0 is going to take a long time to develop. If you are interested in
helping out with the cross platform version, please contact me. I'd
actually like to get it started now.

So where does that leave us?

openlp.org 1.2 is once again going to be a while away. I doubt we'll
have anything beyond beta stage by the end of this year. There's a lot
of work that needs to go into it, and since none of the team is devoted
to working on it full time, things will no doubt take a little while. I
hope to have the first alpha release of 1.2 (i.e. 1.1.0) in about June
of this year, although we'll see how far we get.

After a couple of alpha releases we'll have a minor code freeze (no more
major features), where we will start working towards a final product.
This will be our beta release phase, and after a few betas we'll have a
full code freeze (no more features, end of story) and enter into the
release candidate phase.

After the release of 1.2, the 1.x branch of openlp.org will go into
maintenance mode. This means that we won't have any more major releases,
only bug fix releases. In fact, once 1.2 is out, we will only perform
major bug fixes on 1.0, and once 2.0 is out, only major bug fixes will
be done to 1.2.

Final words

I hope this clears up things for people. I know that at times some folks
have wondered where openlp.org might be going in future, so this should
answer those questions.

Please remember that over and above, openlp.org has a feature-based
release cycle, not a time-base one. We will release each version as and
when we see fit, with the features we are happy with, and when we're
happy that they are bug-free. That might sound a little dicatatorish,
but at the end of the day it's us the developers who have to decide what
we can and can't do. We do this in our spare time, and we aren't paid
for it.
