# TPJ160715
Junior PHP Developer
 

Task code: TPJ160715
 

 

 

Please confirm you have started the work on the tasks and let us be informed of the date you plan to finish it.
 

Recommendations on tasks solving.
 

1 If there are questions which, on your opinion, don’t let you start the task, please ask us as soon as possible, in English (mail to: a.dobrovolskyi@aimprosoft.com, subject: task code).
2 If no specific initial data are given in task’s description, you may set assumptions about it, getting the task solution as simple as possible. Put your notes about your assumptions, pre-definitions, any other notes/comments in READ.ME file along with task’s solution files.
3 Don’t use absolute paths.
 

4 It is welcome you demonstrate the skill of following the code culture (formatting, commenting). 5 Utilize OOP where it’s needed.
6 Use third-party libraries if it is required in task description.
 

7 We suppose, PHP applications are written in PHP 5(5.6) (DMS MySQL 5(5.6)), Apache 2(2.4).
 

8 Please provide the task solution with the minimal set of files, ready for reviewing. Each set should be placed in standalone directory. For example, the task on JavaScript may be placed in the directory named JAVASCRIPT_TASK. The first task on PHP may be placed in the directory PHP_TASK_1, the second – in the directory PHP_TASK_2.
9 Pack all the directories to a single archive (tar or zip), named in the form:
 

 

[task code]<underscore>[surname]<underscore>[name]<point>[archive file extension(s)]
 

For example:
 

TPJ160705_ivanov_pyotr.tar
 

10 Please get ensured your solution is send in separate e-mail letter (it is not a reply) with task code in the subject.

 

JAVASCRIPT TASK
 

 

Create a set of paragraphs (2-3 paragraphs, 30-50 words each). Place a form on the page with text input and a checkbox. The text input should be used to find text in paragraphs. The checkbox should be used as the switcher, the paragraph where the text was found is highlighted (change its background color) or it isn’t. Matched text should always be highlighted. Solve this task using jQuery.
 

 

 

 

PHP TASK 1
 

 

There is the table ‘gallery’ in the database, keeping information about photos: | id (int) | title (varchar) | author (int) | filename (varchar) | reviews (int) |
 

Return the maximal value of the ratio "the total quantity of photo reviews of an author / the total quantity of photos of this author".
 

 

 

 

PHP TASK 2
 

 

Develop a function which generates web-page, containing cells with texts, respectively to the given parameter. The parameter of the function is an array:
 

array (
array ( ‘text’ => ‘text’,
‘cells’ => ‘the string of occupied cells numbers, comma separated’, ‘align’ => ‘horizontal alignment’,
‘valign’ => ‘vertical alignment’, ‘color’ => ‘text color’,
 

‘bgcolor’ => ‘text background color’), array ( ‘text’ => ‘text’,
‘cells’ => ‘the string of occupied cells numbers, comma separated’, ‘align’ => ‘horizontal alignment’,
‘valign’ => ‘vertical alignment’, ‘color’ => ‘text color’,
 

‘bgcolor’ => ‘text background color’),
…
)

The cells are placed on the page as the figure depicts:
1
2
3
 

 

 

 

 

 

4
5
6
 

 

 

7
8
9
 

 

 

 

 

 

The numbers on the cells are the indexes the cells are enumerated with.
 

Different texts occupy different cells sets.
 

This is an example of the parameter:
 

array (
array ( ‘text’ => ‘Red text’, ‘cells’ => ‘1,2,4,5’, ‘align’ => ‘center’, ‘valign’ => ‘center’, ‘color’ => ‘FF0000’, ‘bgcolor’ => ‘0000FF’),
 

array ( ‘text’ => ‘Green text’, ‘cells’ => ‘8,9’,
‘align’ => ‘right’, ‘valign’ => ‘bottom’, ‘color’ => ‘00FF00’, ‘bgcolor’ => ‘FFFFFF’)
 

)

The generated cells on the page:
 

 

 

 

1
2
3
 

 

Red text
 

 

 

4
5
6
 

 

 

 

 

 

 

 

7
8
9
 

Green text
 

Use layouting with “div” tags.


