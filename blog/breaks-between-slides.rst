.. title: Breaks Between Slides
.. slug: 2011/04/29/breaks-between-slides
.. date: 2011-04-29 05:04:32 UTC
.. tags: 
.. description: 

Some improvements have been added to build 1496 to change the way songs
and custom slides are paged. A new feature has been added to allow a
song verse to be split *IF* it does not all fit on one slide.

If a line contains **[---]** then, if the slide does not fit on a single
display, that is where the slide will automatically be split. This means
that songs can be set up for different size themes with complete control
over the paging. In addition the need for two slides containing "V1" etc
has been removed. One slide one verse and the display code will split
things correctly.

For custom slides a minor change has been implemented. **[===]** is now
the slide break if you use "Edit All" and **[---]** is the soft break.
**This does not effect any saved custom items you have created.**

The interfaces will be updated before beta2 to help with adding this
tag.
