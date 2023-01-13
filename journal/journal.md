# My learning journal

## January 11, 2023

**Intro into Server-side forms** 

-input is a self-closing tag 
-form and their inputs and labels end up utilizing A LOT of attributes
-HTML can send forms to other systems
-For PHP each input gets a name that is used as the key in the submitted array of content. 
-"POST" neabs you are sending date to the server vs. requesting it 
-the value attribute represents the data (usually the visual content as well)
-isset() is a way to tell if the variable has been assigned
-after you POST the form- the submitted data just hands around for you to use on the subsequent page visit- justlike any other associative array. 
-HTML inputs (even numbers) end up with "strings" for values. 
-floatval(string) will turn the string into a float or "floating point integer"
-an integer is a whole number that can be either positive or negative. 
-floats are things like 1.5, -42.2, 10.0, etc. 
-Why use an integer if a float can take care of both? 

Notes on the video: 
-form is the element that houses things 
-you can taget any attribute in CSS w/ 
	[type='submit'] OR button[type='submit'];
-<label> = inline-block
-<input> = inline-block <--should be changed to display: block; 

$_GET request= trying to receive something 
$_POST request= trying to send something up to the server

use the method attribute to POST

-give the input a name 
<input type='number' name='berres'>

-when you push submit it's running code from top to bottom 

$super global = $_POST <-- is an associative array 
							"guests" => 3, 
							"berries" => 12, 
							"go" => true, 

-print_r = array 
-var_dump() = associative array 
- isset()							

## January 10, 2023

**Psuedocode** 

-pseudocode is informed language that helps designers organize their thoughts and plan out the process-withouth the specific programming langauge 

Understanding the problem: 
-ask questions 
-draft a problem statement 
-discover the inputs, processes, and outputs 
-create tests
-write the pseudocode
-write the code

-the "period" of time we're currently working in is when the web started to become interactive- think livejournal 
-you can always break down a big problem into a set of smaller problems 
-discovery process --> calm down 
	-inputs
	-process
	-outputs

-large applications are just a bunch of small applications that communicate
-TDD-inputs, expected result, actual result 

## January 9/10, 2023

**PHP templating walkthroughs** 

-PHP primary purpose is to generate HTML 
-PHP doesn't know anything about HTML- it just sees strings and characters 
-PHP allows you to save things in memory- then create references ($variables)to point to those things in memory so that you can reference them later 
-runs top down and executes in order (like a script)
-number_format() 
-access an item in an array with "bracket notation" 
-each item in the array has an index number-the first item would be 0, the second would be 1 and so on 
-to iterate over a list/loop through an array you can use the foreach construct 
-foreach runs a specific block of code "for each" item 
-plural for lists and singular for item seems to be the convention 
-\n = new line, but not used often 
-working out ideas- you can use <li></li> and skip the <ul> or <ol>
-after you learn the bulding blocks-the rest is up to you 
-set up separate file for data & include 
-conditional logic/contraol structures- you can do anything you want 
-if you want a cariable to "do nothing" you must initialize it to an empty string-that's the default. 
-to keep things modular & tidy- create a custom function 
-you can mix PHP and HTML syntax any way you want as long as you follow the rules


solved git dirty 

## January 9, 2023

**Programming Exercises** 

baseline: an initial set of critical observations or data used for comparison or control

**Exercises for Programmers Chapter One** 

Turning problems into code: you have to break down a problem before you can solve it 

**Understanding the problem**

write it down 
ask questions/ gather requirements
once you have answers to your questions- write out a problem statement that explains what you're building 

**Discovering inputs, procesess, and outputs**

every program has inputs, processes, and outputs 
large applications are a bunch of smaller programs that communcate 
the output of one becomes the input of another 
look at the nouns and verbs of your problem statement--> nouns=inputs & output, verbs=processes

**Driving design with tests** 

TDD=test driven development 
the essence of TDD is to think about the expected result ahead ot time and then work toward getting there 
test plan: lists of programs inpits and its expected result 
EX: 
inputs: 
expected result: 
actual result: 

Develop at least FOUR test plans for each program 

**Writing the algorithm in pseudocode** 
algorithm= step by step set of operations that need to be performed 

pseudocode= English-like syntax that lets you think about logic 




## October 28, 2022

**Building a kitchen sink**



## October 27, 2022

**One stylesheet to rule them all**

-CSS gets it's own file that links (<link> not <a> -- two different 
"links") to the HTML page
-Sometimes it's still useful and important to write CSS in the <style> 
element. 
-how to "link" -- <link rel="stylesheet" href="style.css"> 
-rel=relationship
-href=hypertext reference (URL)

## October 26, 2022

**Big Picture Layout Concerns**

-start thinking about the areas of the page as mini websites
-Some better elements to consider: 
   -section -- since the page is usually made up of sections
   -div --generic division of content-- think of it as being used for 
	  grounding things, but purely for visual layout purposes.  
   -inner-column or< div class="inner-column"> --inner-column puts a 
    restraint on content so that it doesn't span the entire page  

## October 25, 2022 

**Code completion, IntelliSense, and Emmet**

-learned that sublime and other text editors can try to complete what 
you're writing and that it can be super helpful once you are proficient 
-for now I turned all of those features off to practice as much as 
possible and to force myself to remember things 

**Milestone CSS Selector videos**

-cmd + / = comment out
cmd+] = indent whole line of code
-ch (characters) as a width unit 
-body= first css rule/biggest scope
-the more specific the rule is-that's the style that will be applied with 
a higher precedence

CSS Rule 
something <--selector {
	something <--property: something <--value; 
	} <--this whole thing is the "style declaration" 

reset/setup 
body

img {
  display: block; 
  width: 100%; 
  height: auto; 
  } <--this is telling the image to fill its space 

* {} <-- universal selector 

-you can't put display block inside of inline elements 
-custom elements are inline by default and need a specific display type 
-inherit=inherits parent's style ex: color: inherit; 
-you can make a list of decendant combinators 
--pause here & will resume on another day-- 



## October 24, 2022

**Uncle Bill's site**

-downloaded the sip app for color 
-learned about background-image: linear-gradient and its properties 
-border-radius: 10px rounds corners 
-the weekend's  goal was to mark up a picture of a website and recreate it
-today we watched a solution of how to recreate the site and were given 
instructions on how it needed to be amended 
-things I learned after watching the solution: 
	-should have used vw for  measurement on h1 so that it wouldn't be 
	too big
	-remember to use CSS clamp 
	 




## October 22, 2022

**Semantic markup and CSS Classes**

-div=generic divider
-id=unique identifier 
-class=a way to put another descriptor onto an element 
-padding is part of the element
-margin is the sapce around/between the element(s)
-when you float-it takes it out of the standard document flow-the way to 
fix this is to use {box-sizing: border-box;}
-ids are not for styling 
-classes are for styling 




## October 21, 2022

**Resets and box-sizing**

-content box vs border box 
-border-box does the math for you- you don't have to try and figure out 
how something is going to fit if the margin is one size or there's 
padding, etc. 
-put box-sizing border-box at the beginng of your css



## October 20, 2022

**Videos About Printing**

- first video was about Ben Franklin and how he really viewed himself as a 
printer- and the enormous effect he had in the newspaper world (also his 
brother's influence that I knew nothing about) 
- the linotype! Wow this stuff was wild! I had no idea how any printing 
was done I guess? So much lead! 
- We've been using some type of printing press for a very very very very 
long time. I have the timeline saved. We've come so far, but we stayed the 
same for a really long time. We used the same techniques for over 100 
years. Just wild. 
- Everything was so thought out and more permanent. Now it feels so easy 
to fix any kind of mistake. 


## October 19, 2022

**Styling text & Resets**

- html elements all have some default styling built in
- css reset allows for the bulk of that styling to be stripped away 
- links are still going to be blue and underlined even with the reset 
- there's something called a meyer-reset for text-editors 
- css selectors
- adjacent sibling combinators- a little weird at first
ex: h2 + p { do this thing } which translates to any p preceded by an h2 
.. gonna take some practice 
- I need to work on a resume but its intimidating- and I need to get some 
goals down on paper so that i can be successful! 



## October 18, 2022

**iFrames & Hash Links**

- iFrame is an html element that allows you to put some other website 
within a website- codepen uses iFrame. 
- substack also uses iFrame to have a subscription link embedded into your 
own webpage 
- web crawlers can't read anything that's in an iFrame
- iFrames are not optimized for search engines 
- hash links allow you to jump to different sections of a page with the 
use of id tags. 
- id tags should be lowercase and kept meaningful and simple 
- ex:  <thing id="thing">
- learned some new block level elements- header, main, section, footer 

## October 17, 2022 

**Pens!** 

- understanding codepen and how it can be a very useful tool for testing 
out ideas and problems and getting instant feedback 
- pen tool in affinity designer. I watched tutorials on this and got 
comfortable with tracing some simple designs to gain understanding of how 
the different pen-tool options work.
- I currently prefer pen-mode over smart-mode. This will take a lot of 
practice to become good with it. 
- Display:inline-block was also introduced today. It has a combination of 
properties that it can use- not just limited to what inline elements can 
do or what block elements can do.

 ## October 15, 2022

**Challenge-1**

- I spent some time setting up a file structure that I thought would work. 
It was very simple. 
- I learned a bit more about how index files work and that they belong in 
every folder/subfolder/sub-subfolder
- My biggest challenge on this was talking myself through backing out of 
nested files. 
- I also got to implement the meta-viewport tag and see how that is so 
handy for phones 
- more FTP and practice/getting comfortable with syncs on the server 
- made my first meaningful commit in tower (it felt less scary since 
having so much practice using git) 

## October 14, 2022

**Style Tag**

- learned how to add the style element into the head of html
- moved all of my styling from my current projects into that format 
- What is an abbr tag? 
- a few new style elements are- line-height which is a non-unit, 
letter-spaced which uses the em unit, and max-width which can use the ch 
unit (ch=characters)

**remember: less but better**

## Oct 13, 2022

**affinity designer**

- learned how to create gradients
- had my first go at getting into a really creative headspace but 
revisiting my visual-inspiration folder and organizing that
- installed and set up divvy-this is definitely going to be helpful. 



## October 11 & 12, 2022 

**metadata** 

- data about data 
- use the inspect tool to look at other code
- I was surprised at some of the websites I frequent and their lack of 
metadata
- running a lighthouse test- helps you learn what websites are doing other 
than just looking at the code 
- metadata is important in giving descriptions about your site, providing 
an image to along with that description, allows you to be more 
searchable/discoverable. 

## October 10, 2022 

- I got more into understanding FTP and how transmit works 
- Learned about the importance of a relative file path and what that is. 
- an example: projects/four-page-site/contact.html, but I am wondering if 
it could just be as simple as: contact.html since the path of 
proects/four-page-site/contact.html repeats if I don't shorten it to just 
contact.html. 
- contact.html works locally, but i'm struggling to figure out why that 
doesn't work within the server 


## October 8 & 9, 2022

**FTP** 

- File Transfer Protocol
- I decided to give transmit a try. The look of it makes a lot of sense 
and it was pretty easy to figure out. 
- Problems arose when I was trying to change my links in my html from 
local to peprojects.dev. I cleared the browser cache in chrome many times 
and could not get my updates to appear. I took all of my files out of 
transmit and re-added them. That didn't work. I took then out again and 
used the sync feature. That also didn't work. Thankfully Emily was there 
helping me test it all this morning. She said it all works on her end and 
suggested using a different browser. Boom! Everything working just fine 
with safari. Not sure what's up with chrome. 
- Got to play in html a little but, but not as much as I wanted. Ready to 
start styling! 

## October 7, 2022

**Block vs. Inline**

- [x] This is a test to see if I fixed the file path
- block stacks vertically _think layers of a cake_
- inline go in a line _follow a horizontal path and break to the next 
line_
- h1 and h2 are large and bold and are the most important thing on the 
page _remember that these elements are for describing not just visually_
- a links are display: inline by default
- you hit and error _read it and assume it means something_
- break lots of stuff
- some elements are structural and some are content
- display: block is responsive





## October 6, 2022 

**Web Portal**

- I did not budget my time well today, but I got it all done. It's amazing how the desire to keep going is 
there when you know you're in the process of changing your life. 
- I thought about how simple the web used to be. You had to **know** what you were looking for. It was so 
much harder to stumble upon anything. 
- The business card site exercise was really tough. I had a hard time finding examples. Once I put in 
business card style sites I had a little luck. Only sites that sell business cards kept popping up. The 
card sites I did find pretty much all left something to be desired. Just something to think about as I 
make my own one day soon. 
- Making my own personal web portal was really fun and satisfying. I know I'll add to it. I've already 
thought of like five things I want to add. 
- I set a goal of making a daily check-list in the mornings. Tomorrow will be day one. 


## October 5, 2022 

**Networking**

- Learn to start writing about myself and what I can do 
- Demonstrate a clear goal and a passion for sharing it 
- Create a cohesive brand and vision 
- Make yourself known and be well-liked 
- Write some interesting articles and create some interesting projects 
- Create a substack and mailing list 
- Start behaving like a real designer RIGHT NOW! 

Today is all about adjusting my mindset. I am going to be a designer/programmer of 
some sort so I need to putting it out into the world in a professional and serious 
way. I have confidence in the things that I have learned so far and will continue to 
build that with lots of practice. 

## October 4, 2022 

**Notes**

- Markdown language is clean and enjoyable to write. 
- Git has given me a lot of trouble. It's working now! I learned that in 
order to rename a branch you must commit a file first. 
- Take breaks. Walk away. It actually saves you time. 
- All of this file path stuff fully connected when I started to use the 
anchor element in HTML. 
- I was able to build a webpage today and fully understand it. I ran into 
a few problems-mostly forgetting closing tags-but that will come with 
practice. 
- I also understand all of the stuff at the top of an html text file. In 
the past I've been told to just hit tab or something and everything will 
appear and I don't need to worry about it. Having the knowledge of what 
everything on the page means in empowering. 

_don't forget about [MDN](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)._

