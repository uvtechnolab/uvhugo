---
title: "Book review: Batch Testen"
date: 2014-07-24T15:27:17+06:00
draft: false
# page title background image
bg_image: "images/backgrounds/page-title.jpg"
# meta description
description : "Blog post about a book review of Batch Testen"
# post thumbnail
image: "images/blog/batch300.jpg"
# post author
author: "Chris Van Bael"
# taxonomy
categories: ["Testing"]
tags: ["Book", "Software", "Testing"]
# type
type: "post"
---

A book review I’ve been meaning to write for some time: Batch Testen by ir. Dew Persad.

![Cover of book Batch Testen](/images/blog/20140727/batch300.jpg#center)


A few months ago a possible client in the printing industry asked for an assessment of their testing efforts.  Most of their software runs in batches.  Having worked mostly in the embedded industry and on webbased software, this was a quite new subject for me.  So during my holiday in France I ordered this book and studied it. It was quite useful for the assessment!  The book is in Dutch.

The summary of the book tells it gives a structured method to optimise batches according to the BATCH method (good name!) that has 5 phases each with 3 steps. I’m not going into detail on the steps, these are very clear in the book.  The first part of the book deals with why good quality in batches in necessary and goes into depth on the BATCH method:

**B: Business** know how: in this phase, one should get an understanding of the business: which batch processes are present, which ones are essential, determine the risks, order of the batches, etc.  This phase is of course essential for the next phase.

**A: Analyse the batches**: in this phase, one gets to look in depth at the batches.  Taking into necessity and need of each batch process, datatables used, acceptation criteria, when to run the processes, etc.  The last step is an in-depth analysis of the batch using the Software Architecture Document with 6 views:

+ Use case view: looking at functionality
+ Test view: way of testing
+ Domain view: looking at the data
+ Logical view: looking at the components of the system
+ Implementation view: looking at the requirements
+ Deployment view: looking at the technical infrastructure

This phase may take quite some time to get a good understanding of the batch processes.  If done well, it really helps well in the next phases

**T: Test the batches**: The reason why I bought the book! There are 3 steps:

  1.  Test analysis (in the book it’s called Testopzet, I don’t know a good English translation)
  2.  Test preparation
  3.  Test execution

The book gives a nice table with deliverables of the batch test team.  This is really useful, since these deliverables are what make batch testin different from other testing.  (that’s my opinion!)

**C: Check the results**: in this phase one has to verify the output of the batches.  The business should accept (or not) the batches in this phase.

**H: Handover to business:** Batches that are not managed well, can have performance degradation or even lock up after a few months.  Erroneous input  date can multiply over time.  So it is of essence to manage the batches.  It is necessary to have the business knowledge and technical knowledge to maintain them.

At the end of the first part of the book is a chapter on running the batches in the production environment.  This is something not familiar for many developers, so it is an interesting read.

The second part of the book goes into detail on

  *  Quality of batch processes
  *  Development of batch processes
  *  Testing
  *  Technical infrastructure
  *  Extra necessities for the batch roles

I was of course very interested in the testing chapter. Well, it seems testing batch processes is not so different from testing any other type of software.  Same techniques, processes, etc apply.  The book uses the V-model as the basis for the testing of batch processes.  It doesn’t go into detail on the applicability of, for example, Agile testing.  In my opinion there is a small chance of an organisation developing batch processes using an Agile approach.

**Conclusion:**  If you are using batch processes in your organisation, I think this book is really an addition.  It is quite hands-on, not too theoretical.  It gives quite a few tips and tricks and the BATCH method is very useful as a basis for your own development process.  Easy to read and brief (164 pages), it provides the basis and a framework, but you have to tailor it to your own needs.

All in all, this book is really an addition to the large number of testing books already out there.  I would recommend to translate it also in English for a wider audience.