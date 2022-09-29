## Math Helper

Development should be consistent with the IntelliJ environment.

### Specification

You have been approached by a local education company to provide a software solution to help students at all levels with
their mathematics studies. The company requires an application that produces random arithmetic expressions tailored to
the level appropriate for the student.  
This should be an application that is easy to use for students from Reception level to Year 7
(5 years old to 12 years old). It should be a text based application that presents an expression and allows the user to
type the answer.   
The application will confirm if the supplied answer is correct or incorrect immediately and also keep track of the
overall percentage for the student. This overall percentage is reported at the end of the session with an appropriate
statement of feedback. The length of a session should be defined at the start of each session and can include 10, 20,
30, 40, or 50 questions.   
The following issues should be considered at the start of each session, addressed by numbered menus:

- What is the level of the student?
    - **Reception**: only addition
    - **Years 1 - 2**: addition and subtraction
    - **Years 3 - 4**: addition, subtraction, multiplication, division (without remainder)
    - **Years 5 - 6**: addition, subtraction, multiplication, division (without remainder), negative numbers
    - **Year 7**: addition, subtraction, multiplication, division (without remainder), negative numbers and division (
      with remainder – presented as <samp>xry</samp>, where <samp>x</samp> is the result of the division and <samp>
      y</samp> is the remainder, ie <samp>10 % 3 = 3r1</samp>).
- What is the length of the session?
    - 10 questions
    - 20 questions
    - 30 questions
    - 40 questions
    - 50 questions

The year level that the user supplies will determine what number ranges are used.

| Units     | Range          | Year Level   |
|-----------|----------------|--------------|
| units     | (0 → 9)        | At Reception |
| units     | (0 → 9)        | Years 1 - 2  |
| tens      | (0 → 99)       | Years 3 - 4  |
| hundreds  | (-999 → 999)   | Years 5 - 6  |
| thousands | (-9999 → 9999) | At year 7    |

Example output could be as follows (user input in <mark>**bold highlighted**</mark> text)

<pre>
+------------------------------------------------------------------------+ 
|                     Welcome to the Maths Helper!                       |  
|      Use this application to test your knowledge of mathematics        |  
|     This program is intended for children from reception to year 7     |  
+------------------------------------------------------------------------+  
What is your year level?
Choose an option from the list below:
(where: + = addition, - = subtraction, * = multiplication,
/ = division, % = division with remainder)
[0] Reception [+]
[1] Year 1 [+, -]
[2] Year 2 [+, -]
[3] Year 3 [+, -, *, /]
[4] Year 4 [+, -, *, /]
[5] Year 5 [+, -, *, /, negative numbers]
[6] Year 6 [+, -, *, /, negative numbers]
[7] Year 7 [+, -, *, /, %, negative numbers]
<mark><b>3</b></mark>
How many questions would you like to attempt?
Choose an option from the list below:
[1] 10 questions
[2] 20 questions
[3] 30 questions
[4] 40 questions
[5] 50 questions
<mark><b>4</b></mark>
You are a year 3 student and want to do 40 questions. Is this correct (Y/N)? <mark><b>Y</b></mark>
Let’s begin ... (press ‘Q’ at any time to quit)
</pre>

If the student indicates that the information entered was incorrect then they should be prompted to re-enter their
details. _Both menus should be displayed again until the user enters the correct options_.

A standard session will generate a random expression (random numbers and random operator)
and output the expression as a string to the terminal window. The application will wait for a user response to the
expression and once entered will assess the correctness of the input. A string indicating the correctness of the
student’s answer will be displayed and then the next expression generated and displayed. This process will continue
until all questions in the session have been answered.

Example output could be as follows (user input in <mark>**bold highlighted**</mark> text):

<pre>
64 + 12 = <mark><b>76</b></mark>
Correct! Well Done! Your current percentage is 100%
10 + 97 = <mark><b>107</b></mark>
Correct! Well Done! Your current percentage is 100%
5 * 39 = <mark><b>159</b></mark>
Bad luck that was incorrect. The correct answer was 195.
Your current percentage is 66.67%
22 / 58 = <mark><b>0</b></mark>
Correct! Well Done! Your current percentage is 75%
...
Your total percentage was 72%. Well done. That was a good effort.
Did you want to have another go with the same settings (Y/N)? <mark><b>N</b></mark>
Did you want to start a new Session or Quit (S/Q)? <mark><b>S</b></mark>
+------------------------------------------------------------------------+
|                      Welcome to the Maths Helper!                      |
|       Use this application to test your knowledge of mathematics       |
|     This program is intended for children from reception to year 7     |
+------------------------------------------------------------------------+
What is your year level?
Choose an option from the list below:
(where: + = addition, - = subtraction, * = multiplication,
/ = division, % = division with remainder)
[0] Reception [+]
[1] Year 1 [+, -]
[2] Year 2 [+, -]
...
You are a Reception student and want to do 10 questions. Is this correct (Y/N)? <mark><b>Y</b></mark>
Let’s begin ... (press ‘Q’ at any time to quit)
9 + 2 = <mark><b>Q</b></mark>
Thanks for playing.
Goodbye.
</pre>

By entering the character ‘**H**’ the user is able to ask for a hint to be supplied. This hint should display the last
digit in the answer preceded by a ‘**-**’ for each extra digit in the answer. Any subsequent requests for a hint will
reveal the preceding digit. A student can continue to request help for the expression until all digits are revealed. If
this happens then this question should be graded as incorrect.

Example output could be as follows (user input in <mark>**bold highlighted**</mark> text):

<pre>
84 * 7 = <mark><b>H</b></mark>
84 * 7 = --8: <mark><b>H</b></mark>
84 * 7 = -88: <mark><b>588</b></mark>
Correct! Well Done! Your current percentage is 100.00%
104 * 58 = <mark><b>H</b></mark>
104 * 58 = ---2: <mark><b>H</b></mark>
104 * 58 = --32: <mark><b>H</b></mark>
104 * 58 = -032: <mark><b>H</b></mark>
104 * 58 = 6032
Bad luck that has been marked incorrect because you used all of your hints.
Your current percentage is 66.67%
</pre>

The application should respond to the user during a session.   
If they are finding the tasks too difficult then the level of complexity should be reduced. The reverse is true if they
are finding it too easy – the level of difficulty should be increased. This evaluation should take place after each lot
of 5 questions.   
If the user has an overall percentage of more than 75% then increase the level of difficulty by 1 year level. However,
if the user has an overall percentage of less than 30% then reduce the level of difficulty by 1 year level.   
Difficulty cannot be increased above year 7 level or reduced below reception level.

## Tasks

While the steps described below should be completed sequentially you should also pause during your development to test
recent changes and fix problems as they arise. Don’t leave testing until you complete Task 6.

### Task 1 – Initial Presentation

Take some time to read through the existing code and the comments. You will **not** need to change
the `MathsHelperDriver` class, however you will be adding code to the `MathsHelper`
class. So you should see several methods defined int the <code>MathsHelper</code> class:

- **displayWelcome()**
- **displayYearMenu()**
- **displayQuestionMenu()**

As well as these methods that have content within their body there are also methods that require further definition by
you.

- **letsPlay()**
- **printOutput(String str)**
- **confirmSessionDetails(int year, int questions)**

Your task is to display the content to the user, capture their input and verify with the user that the information they
have provided is correct.

Looking at the <samp>**displayWelcome()**</samp> method you should see that it makes use of many calls to the
method <samp>**printOutput(String str)**</samp>. You will need to define the operation of the
<samp>**printOutput(String str)**</samp> method. Looking at the JavaDoc comments above the method you should be able to
determine the functionality of this method. Printing the content to a file will be handled in _Task 6_ of this
assignment, however you will need to provide code to print the strings to the console screen. Take note of the strings
that are being passed to <samp>**printOutput(String str)**</samp> to determine whether to use the
<samp>**print()**</samp> or the <samp>**println()**</samp> method.

Once you have modified <samp>**printOutput(String str)**</samp> to print the string <samp>**str**</samp> to the screen
you will need to invoke the methods in the correct sequence. Add the necessary statements to the
<samp>**letsPlay()**</samp> method to enable this. When you run the program, output from these changes should look like
the following:

<pre>
+------------------------------------------------------------------------+
|                      Welcome to the Maths Helper!                      |
|       Use this application to test your knowledge of mathematics       |
|     This program is intended for children from reception to year 7     |
+------------------------------------------------------------------------+
What is your year level?
Choose an option from the list below:
(where: + = addition, - = subtraction, * = multiplication,
/ = division, % = division with remainder)
[0] Reception [+]
[1] Year 1 [+, -]
[2] Year 2 [+, -]
[3] Year 3 [+, -, *, /]
[4] Year 4 [+, -, *, /]
[5] Year 5 [+, -, *, /, negative numbers]
[6] Year 6 [+, -, *, /, negative numbers]
[7] Year 7 [+, -, *, /, %, negative numbers]
How many questions would you like to attempt?
Choose an option from the list below:
[1] 10 questions
[2] 20 questions
[3] 30 questions
[4] 40 questions
[5] 50 questions
</pre>

Now you will need to process user input and verify that the user is happy with the menu selections that they have made.

A <samp>**Scanner**</samp> object <samp>**scan**</samp> has already been defined for your needs. Make use of the Scanner
operations to capture the user input. An instance variable <samp>**yearLevel**</samp> should be used to store the user’s
response to the year menu and a local variable <samp>**numQuestions**</samp> used to store the user input from the
questions' menu.

Note that the <samp>**confirmSessionDetails()**</samp> method is a <samp>**boolean**</samp> type method; this means the
method is required to return a **true** or **false** value to the calling code. Within the
<samp>**confirmSessionDetails()**</samp> method you need to present the following information to the user:

<samp>You are a _**yearName**_ student and want to do _**questions**_ questions. Is this correct
(Y/N)?:  
where the **_bold, italic values_** are determined based on user input.

At the moment you are capturing two integers from the user and passing them to <samp>**confirmSessionDetails()**</samp>.
Complete the following steps to fill in the necessary information for the prompt above:

- You need to analyse the **year** value and if it is equal to 0 then **yearName** should be Reception, otherwise
  **yearName** should be year (where **bold year** represents the integer passed to the method, i.e. if the user
  supplied option 5 from the year menu, this would result in Year 5).
- The value of questions is based on the menu selection, i.e. 1 for 10 questions, 2 for 20 questions, 3 for 30 questions
  ...   
  You should use this relationship to provide a suitable number for questions to the prompt seen above.

Finally, for the <samp>**confirmSessionDetails()**</samp> method you need to capture user input and if they supply
either a ‘<samp>**Y**</samp>’ or ‘<samp>**y**</samp>’ then they are happy with the input they provided otherwise the
program will need to repeat the presentation of both menus to the user and capture a fresh set of inputs for
<samp>**yearLevel**</samp> and <samp>**numQuestions**</samp>.

To achieve this you will need to return appropriate values (true or false) from the method. Think about the process that
you are asking the user to engage in:

_Do the following:  
&emsp;What is your year level?  
&emsp;Get user input  
&emsp;How many questions?  
&emsp;Get user input  
&emsp;Is this information correct?  
&emsp;Get user input  
While the information is **NOT** correct._

By following the above process you are locking the user into a loop until they provide a response indicating that they
have supplied the correct information (in this case either ‘<samp>**Y**</samp>’ or ‘<samp>**y**</samp>’). This is
achieved through a prompt and test process where you want the program to run through the prompt at least once and then
verify the user is happy with their input. The loop needs to wrap around the <samp>**displayYearMenu**</samp> and
<samp>**displayQuestionMenu**</samp> method invocations in the main method. The return value you generate from
<samp>**confirmSessionDetails**</samp> will control the repetition of the loop. If the user has not provided the right
details then repeat the loop, if they have provided the correct details then end the loop.

At this point you should be able to present all the welcome details to the user and have them make selections from each
menu and then confirm the information provided is correct.

---

#### REPORT TASK

Your final task for this part is to document what you have done. Answer the following questions:

1. What issues (if any) did you encounter with the program?
2. Describe any issues with the code as initially downloaded.
3. What did you have to fix in order to compile and run the code successfully in IntelliJ?
4. What strategy did you employ to verify that the user provided valid menu item values?

---  

### Task 2 – Generating random questions

Now that you have gathered the necessary information from the user it is time to begin the actual session – so start by
displaying “Let’s begin!” to the user. Within the <samp>**letsPlay**</samp> method but after the _Do loop_ you completed
in the previous task, invoke the <samp>**printOutput**</samp> method to display the string to the console. To generate
random questions there are three things that need to be gathered:

* the minimum number for a value in the expression
* the maximum number for a value in the expression
* the range of operators for the expression

All of these values are based on the year level of the user. Once these elements have been gathered a question is
generated and presented to the user. The process for completing these tasks may look something like:

_Repeat for the number of questions  
&emsp;Add one to the count  
&emsp;Generate a question based on the year  
&emsp;&emsp;Get the minimum value  
&emsp;&emsp;Get the maximum value  
&emsp;&emsp;Generate a random number num1 between the minimum and maximum  
&emsp;&emsp;Generate a random number num2 between the minimum and maximum  
&emsp;&emsp;Get the operator  
&emsp;Print num1, operator, num2 to the screen  
End_

There are many sub-tasks that are required to complete the above steps. Overall, we need to repeat these operations for
the total number of questions the user has requested – we can use a counting or for loop to achieve this. Define a for
loop that repeats for the number of questions and place it after the <samp>**printOutput(“Let’s begin!”)**</samp>
statement in your <samp>**letsPlay**</samp> method.

We need to work out the user’s percentage of correct answers for a later task in the assignment, to help facilitate this
we will use an instance variable called count and increment it each time the loop repeats, i.e.
<samp>**count++;**</samp>. Declare the instance variable as type <samp>**int**</samp> and set it to 0 and then within
the for loop you have just declared increment the value.

So we don’t clutter up the <samp>**letsPlay**</samp> method and also to help with readability and re-usability we are
going to make use of several methods to complete the above steps.

In the space below your existing methods but within the class (i.e. before the last **}**) define a new void type method
called <samp>**generateQuestion(int year)**</samp>:

```java
private void generateQuestion(int year){
...
}
```

The first thing we need to do within this method is to get the minimum value for the expression based on the user’s year
level. Declare an <samp>**int**</samp> type variable called <samp>**min**</samp> that will hold this minimum value. We
will assign the returned value from another method to this variable. To accomplish this you should complete the variable
declaration with an initialization statement, i.e.:

```java
int min=getMin(year);
```

When you type this in you should see an indicator (small light bulb with red warning sign) appear in the line number
margin within _IntelliJ_. Clicking once on the indicator brings up a small popup box with a message within that reads:

<samp>**Create method “getMin(int)” in MathHelper**</samp>

Clicking on this message will get _IntelliJ_ to create a method declaration for this method.

Looking at the specification above you can see that all students from reception to year 4 have a minimum value of 0,
while students in year 5 and 6 have a minimum value of -999, and year 7 users have a minimum value of -9999. With this
knowledge you could create a collection of if statements or use a switch statement to get the right value for the year
level. The pseudocode below describes the type of decisions that could be made:

_If year equal 0  
&emsp;Set min to 0  
If year equals 1  
&emsp;Set min to 0  
If year equals 2  
&emsp;Set min to 0  
If year equals 3  
&emsp;Set min to 0  
If year equals 4  
&emsp;Set min to 0  
If year equals 5  
&emsp;Set min to -999  
If year equals 6  
&emsp;Set min to -999  
If year equals 7  
&emsp;Set min to -9999_

However, we can simplify this, consider:

_Set min to 0  
If year equals 5 or 6  
&emsp;Set min to -999  
If year equals 7  
&emsp;Set min to -9999_

With the above pseudocode we are setting the starting value to 0 and if none of the conditions are met then this
<samp>**min**</samp> value is not changed. This essentially allows us to set <samp>**min**</samp> to 0 (no negative
numbers until year 5) for all year levels from reception to year 4 with one line of code. Using this shorter example of
pseudocode implement this as working Java code within your <samp>**getMin()**</samp> method.

Based on the above discussion complete similar steps for the <samp>**max**</samp> value. Declare a local variable
called <samp>**max**</samp> and assign it a value returned from a <samp>**getMax()**</samp> method.

Once you have identified the maximum and minimum ranges to the numbers within the expression you can then generate the
appropriate random numbers.

Declare local variables called <samp>**num1**</samp> and <samp>**num2**</samp> to hold the random values generated.

The next step in our plan is to get the operator that is to be used for the expression. As with the <samp>**min**</samp>
and <samp>**max**</samp> values the range of operators that the expression can have is based on the year level of the
user. Reception students only have one operator (**+**) for their expressions, year 1 and 2 students can have possibly 2
operators (**+, -**), while year 3, 4, 5, and 6 students can have 4 operators (**+, -, \*, /**) and finally year 7
students can have 5 operators (**+, -, \*, /, %**). As the operators should be generated randomly we need to create a
process that identifies first how many possible operators we have access to and then generate a random value within that
range that maps to the operators. Using the same principles as <samp>**getMin**</samp> and <samp>**getMax**</samp> we
can base our decision on the year level, i.e.:

_Set operatorBounds to 1  
If year equals 1 or 2  
&emsp;Set operatorBounds to 2  
If year equals 3 or 4 or 5 or 6  
&emsp;Set operatorBounds to 4  
If year equals 7  
&emsp;Set operatorBounds to 5_

Once we have the bounds we can then generate a random number within these bounds.

Generate a random number between 1 and the <samp>**operatorBounds**</samp> and return this value to the calling method
and assign it to an int variable <samp>**oper**</samp>.

The final step is to convert the <samp>**int oper**</samp> into a character that represents the type of operation that
we want to perform in our expression. In your <samp>**generateQuestion**</samp> method create a <samp>switch</samp>
based on the oper value that will assign a character to the local char variable op, i.e:

_oper == 1 → op = ‘+’  
oper == 2 → op = ‘–’  
oper == 3 → op = ‘*’  
oper == 4 → op = ‘/’  
oper == 5 → op = ‘%’_

As with the count variable discussed earlier we are laying the groundwork for future tasks, and so we are placing the
logic within the generateQuestion method rather than the <samp>**getOper**</samp>
method to help with the calculation of results from the expression – covered in Task 3.

Now you should have two int values assigned to <samp>**num1**</samp> and <samp>**num2**</samp> and a
<samp>**char**</samp> value assigned to <samp>**op**</samp>. The last step for this task is to combine these values into
a string and print the string to the console using <samp>**printOutput**</samp>. This statement should be placed at the
bottom of your <samp>**generateQuestion**</samp> method.

Finally, add the method invocation <samp>**generateQuestion(yearLevel)**</samp> to the loop you defined at the start of
this task. When you run your code you should see output similar to the following:
user input in <mark>**bold highlighted**</mark> text

<pre>
+------------------------------------------------------------------------+
|                      Welcome to the Maths Helper!                      |
|       Use this application to test your knowledge of mathematics       |
|     This program is intended for children from reception to year 7     |
+------------------------------------------------------------------------+
What is your year level?
Choose an option from the list below:
(where: + = addition, - = subtraction, * = multiplication,
/ = division, % = division with remainder)
[0] Reception [+]
[1] Year 1 [+, -]
[2] Year 2 [+, -]
[3] Year 3 [+, -, *, /]
[4] Year 4 [+, -, *, /]
[5] Year 5 [+, -, *, /, negative numbers]
[6] Year 6 [+, -, *, /, negative numbers]
[7] Year 7 [+, -, *, /, %, negative numbers]
<mark><b>5</b></mark>
How many questions would you like to attempt?
Choose an option from the list below:
[1] 10 questions
[2] 20 questions
[3] 30 questions
[4] 40 questions
[5] 50 questions
<mark><b>2</b></mark>
You are a year 5 student and want to do 20 questions. Is this correct (Y/N)? <mark><b>y</b></mark>
Let’s begin!
107 / -10 = 635 + -884 = -737 + -560 = -90 * 940 = 290 / -151 = 113 / 594 = -464
* 73 = 826 - -924 = 271 / 478 = -471 * -666 = -885 + -542 = -107 * -666 = 922 -
769 = -96 + 996 = -728 / -704 = -553 - 372 = 472 * 917 = -451 - 982 = -920 + -500
= 77 / -389 =
</pre>

You will notice that all the questions flow on to one and other on the same line. This will be corrected during the next
task where you will start to process user answers.

---

#### REPORT TASK

Answer the following questions:

1. The company has changed the specifications and would now like year level 4 to include negative numbers and year level
   6 questions to include modulo division. How would you need to change the code to achieve this?
2. The company has notified you that questions should now be output in a slightly different format that includes a
   prefix identifying the question number in the format <samp>**Q**_n_</samp> where <samp>_n_</samp>
   is the question number. For example, an addition question that is the first question in the set should appear as:  
   <samp>Q1. 6 + 3 =</samp>  
   What would you need to change in the code to accomplish this?

---

### Task 3 – Evaluating the answers

Now that the random questions are being generated we need to calculate the result of the expression and confirm that the
user has provided the correct answer. We will be using strings to do all our comparisons between the calculated result
and the user supplied answer, so your first task is to declare a local string variable <samp>**result**</samp> within
the <samp>**generateQuestion**</samp> method and assign it an empty string. Within the <samp>switch</samp> statement you
defined in the last task (used to determine an operator) you should implement the appropriate calculation and assign the
result to the string variable.

_If the operator is +  
&emsp;set result to (num1 + num2)  
If the operator is –  
&emsp;set result to (num1 – num2)  
If the operator is \*  
&emsp;set result to (num1 * num2)  
. . . etc._

Remember that the output from the division with remainder should be <samp>**XrY**</samp>, where <samp>**X**</samp> is
the result of the division operation and Y is the result from the modulus operation. This is partly the reason for
defining result as a string.

Test your calculations by concatenating result to the end of your <samp>**printOutput**</samp> call at the bottom of
the <samp>**generateQuestion**</samp> method. The output you get should be testable with a calculator. When you run your
code you should see something like the following (I have concatenated an additional space after result to break the
expressions up, the following has been created for a year 7 wanting 40 questions):
<pre>
Let’s begin!
5591 - -5502 = 11093 9240 * 4355 = 40240200 7409 / -4570 = -1 -1157 * 1077 = -
1246089 5084 % 259 = 19r163 -3660 - -3298 = -362 -4008 / -2987 = 1 567 / -6323 =
0 2430 / -40 = -60 -129 / -1327 = 0 -445 * -4832 = 2150240 -6845 / -1975 = 3 813
* 4588 = 3730044 7825 * -1115 = -8724875 -2101 % 2410 = 0r-2101 8663 + -9640 = -
977 -9374 % -6708 = 1r-2666 -6683 % -9726 = 0r-6683 6171 % -542 = -11r209 -7067
* 3081 = -21773427 1022 / -762 = -1 5030 / 3358 = 1 9279 + 9013 = 18292 -1406 *
 8914 = -12533084 -693 % 2860 = 0r-693 5130 / 5450 = 0 9873 * 6406 = 63246438 4432
/ -955 = -4 -4051 - 4732 = -8783 -1717 - -1628 = -89 2486 - 7542 = -5056 1905 *
-9607 = -18301335 8019 - 1058 = 6961 -8438 * -7187 = 60643906 -5321 + -3679 = -
9000 -8402 / 6044 = -1 464 / 2248 = 0 -2263 / -5231 = 0 6201 / -7971 = 0 1136 +
3690 = 4826
</pre>

Once you are satisfied that the result is being calculated correctly remove the reference to result from your
<samp>**printOutput**</samp> method call.

Your task now is to evaluate whether the user has provided the correct answer. We will define and call a method to
complete this action. At the bottom of your <samp>**generateQuestion**</samp> method write the following statement:

```java
evaluateAnswer(result); 
```

Use the process described previously to get _IntelliJ_ to declare a new method with the appropriate signature for
the <samp>**evaluateAnswer(result)**</samp> method. Within this method we need to capture the user input and compare it
to the result the program generated. The following pseudocode describes this process.

_Set userIn to the user input  
If userIn is the same as result  
&emsp;Increment correct  
&emsp;Print “Correct! Well Done!  
&emsp;Your current percentage is **calculatedPercentage**”  
Otherwise  
&emsp;Print “Bad luck that was incorrect. The correct answer was **result**.  
&emsp;Your current percentage is **calculatedPercentage**”_

Something that you should note – we are comparing strings for equality – use the appropriate structures to assess this
equality.

You will notice that there are two new things that have been described above: <samp>**correct**</samp>
and <samp>**calculatedPercentage**</samp>.   <samp>**correct**</samp> should be an instance variable that gets
initialised to zero and then increments every time the student enters the correct answer. We can then use this <samp>**
correct**</samp> value combined with our <samp>**count**</samp> value defined previously to calculate the
calculatedPercentage, i.e. <samp>**correct/count**</samp> (remember this will be integer division, but we want a double
value).

<samp>**calculatedPercentage**</samp> should be formatted to 2 decimal places. At the moment we are using
<samp>**printOutput**</samp> to send our strings to the output window, however, <samp>**printOutput**</samp> only
accepts a string as an argument. You will need to use an appropriate method to format the output as a string percentage.

This means we cannot send this information to our current <samp>**printOutput**</samp> method (it only accepts a single
string as an argument). To deal with this we will overload the <samp>**printOutput**</samp>
method.

Declare a second void method called <samp>**printOutput**</samp> but declare formal parameters of type
<samp>**String**</samp> and <samp>**double**</samp>. Within this method make use of the method you determined above to
display the string and double appropriately formatted.

This will result in the output looking something like:  
Correct! Well Done! Your current percentage is 100% With the cursor waiting at the end of the line, which means the
following expression will be displayed on the same line, i.e.:

<samp>Correct! Well Done! Your current percentage is 100%50 + 72 =  </samp>

Obviously this is not something that we want to happen; we want a percentage symbol after 100.00 and to place the cursor
on a new line. To get the new lines we use the same use escape sequences to introduce a new line as we have in
the <samp>**displayWelcome**</samp> method.

At this point you should be able to run your program and have it present an expression to the user, and they should be
able to provide a response. This response should then be evaluated against the actual answer and then an appropriate
message displayed to the user.

The last step for this task is to display a final message to the user when they have finished the sequence of questions.
This message should be based on their percentage achieved during the session. When the loop generating questions has
concluded you will need to calculate the percentage and present this:

<samp>Your final score was **calculatedPercentage**%</samp>

Use the following pseudocode to define the next part of the message presented to the user:

_If calculatedPercentage is less than 40  
&emsp;Print “Bad luck. Try practicing with some lower year levels to build your confidence and skills”  
If calculatedPercentage is between 40 and 49  
&emsp;Print “That was a good effort, but you may need to work on some expressions”  
If calculatedPercentage is between 50 and 59  
&emsp;Print “Congratulations you passed. Keep practicing at this year level to improve your score”  
If calculatedPercentage is between 60 and 74  
&emsp;Print “Well done. That was a good effort.”  
If calculatedPercentage is between 75 and 84  
&emsp;Print “Good job. You should try the next year level in your next test”  
If calculatedPercentage is more than 84  
&emsp;Print “Excellent work! You really know your stuff. Try the harder levels next time”_

---

#### REPORT TASK

Answer the following questions:

1. Describe your implementation of the <samp>**evaluateAnswer**</samp> method. Explain how you read in the user’s
   response to each question, check whether their answer is correct, and output the appropriate feedback.
2. The company has asked you to modify the program to include a count of the run of correct answers and output
   encouraging messages for the length of the run. How would you need to change the code to achieve this, and what
   foreseeable problems may you encounter?

---

### Task 4 – Adaptive Difficulty

For this task you should modify the program to respond to users who are either doing really well or really poorly.

After each block of five questions if the calculated percentage is greater than 75% the program should increase the
difficulty by raising the <samp>**yearLevel**</samp> by one and displaying the message:

<samp>"You are doing well! Let’s increase the difficulty a little."</samp>

However, if the calculated percentage is less than 30% then you should lower the <samp>**yearLevel**</samp> by one and
display the message:

<samp>"It seems you are having some difficulty. Let’s reduce the difficulty a little."</samp>

You need to think about where the best place is to implement this test. Remember you have an instance variable that
tells you how many questions have been attempted during the session. You should also be aware that the yearLevel cannot
go below 0 or above 7.

---

#### REPORT TASK

Answer the following questions:

1. Describe why you chose the place to implement this test and what, if any, methods or variables you were required to
   implement/create.
2. Would it be easy to change the frequency of the check if required, i.e. after each block of 7 questions?  
   Describe how this could be achieved.

---

### Task 5 – Providing Hints and Quitting

**_TRICKY_**

With this task you will implement a system that allows the user to supply characters rather than digits when answering
each expression. The user will be able to type ‘q’ or ‘Q’ and quit the application completely. They can also type ‘h’ or
‘H’ to receive a hint about the current expression.

These user inputs will be caught at the same point where the user provides answers to each expression. When you evaluate
the answer you should define a statement that tests whether the user has entered ‘q’ or ‘Q’, if they have, then use the
statement:

```java
System.exit(0);
```

to close the program.

To get the hint functionality working you will need to lock the user into a loop that presents a restructured expression
every time they enter ‘h’ or ‘H’. For example, given the following expression (user input in <mark>**bold
highlighted**</mark> text):
<pre>
-6804 + 2820 = <mark><b>h</b></mark>
</pre>
If the user supplied ‘**h**’ for their answer then the expression should be restructured and display:
<pre>
-6804 + 2820 = ––4:
</pre>
and wait for the user to either supply an answer or request another hint or quit, for example:

<pre>
-6804 + 2820 = ----4: <mark><b>h</b></mark>
-6804 + 2820 = ---84: <mark><b>h</b></mark>
-6804 + 2820 = --984: <mark><b>-3984</b></mark>
Correct! Well Done! Your current percentage is 100%
</pre>

If the user requests too many hints (i.e. a hint for every digit in the answer) then the guess should be registered as
incorrect and the normal process should follow.

To get the presentation of the hint correct you will need to keep track of how many hints have been requested for the
current expression. Use this value to display a string of “**-**” concatenated together. This value you have used to
hold the total number of hints can also be used to create a substring that you should concatenate to the end of your
string of “**-**”. Then display the restructured expression to the user and retrieve their input. If the input is ‘**h**
’ or ‘**H**’ then repeat the process – use the following pseudocode to help:

_Set hint to an empty string  
Repeat while user asks for a hint  
&emsp;Repeat for (length of result – number of hints)  
&emsp;&emsp;Set hint to hint + “-”  
&emsp;Set hint to hint + a substring of result starting at the character at position  
&emsp;&ensp;(length of result - number of hints)  
&emsp;Print num1 + “ “ + op + “ “ + num2 + “ = ” + hint + “: ”  
&emsp;Get user input_

If the user types in a digit then the normal processing should occur and the program should test the correctness of the
user’s answer.

---

#### REPORT TASK

Answer the following question:

1. Describe any difficulties you had in developing the solution to this task.

---

### Task 6 – Logging and multiple sessions

For the last task you will need to implement a mechanism to allow for a log of all activity during the session to be
written out to a text file for later review by the teacher. You will need to use a
<samp>**PrintWriter**</samp> object to output to a text file. Each session should have its own unique text file – the
easiest way to complete this is to use the system time (in milliseconds) as the file name. To get this value you can use
the statement <samp>**System.currentTimeMillis()**</samp>. Concatenate a string containing “<samp>.txt</samp>” to the
time generated and assign this to a string called file. Use file as the argument for the creation of a new <samp>**
PrintWriter**</samp>. Now whenever you need to print something to the screen you should also print the same content to
the text file – this should be done within your <samp>**printOutput**</samp> methods.

The challenge however is to capture user input and print this to the text file. Consider when you capture this input and
what you do with it.

When working with a file you need to be aware that your program may have difficulties finding the file, and you will
also need to close the file when exiting your program (i.e. before <samp>**System.exit(0))**</samp>.

Once you have this process working you should then set up your project to allow for multiple sessions. These sessions
should allow the user to repeat with the same settings (year level and number of questions) or begin a new session with
new settings. When you present the user with their final score display the following message to the user:

<samp>“Did you want to have another go with the same settings (Y/N)?”</samp>

If the user supplies ‘**y**’ or ‘**Y**’ then print <samp>“Let’s begin!”</samp> and start generating new random
questions. If however the user supplies ‘**n**’ or ‘**N**’ then present them with the following message:

<samp>“Did you want to start a new session or quit (S/Q)?”</samp>

If they supply ‘**s**’ or ‘**S**’, then display the welcome message and the menus, so they can define new parameters for
the next session. If they supply ‘**q**’ or ‘**Q**’ then quit the application. Your final requirement is to ensure the
user enters the correct information into the menus. If they enter a value that is not recognised by the menu (i.e. a
letter, symbol or digit outside the bounds of the menu options) then present the menu to them again until they supply a
legal value.

---

#### REPORT TASK

Answer the following questions:

1. Describe how you captured user input and printed this to the text file.
2. The company has asked you to write a Graphical User Interface for the program you have written. Could it be used as
   is, or would you need to rewrite parts of the code to accomplish this? Discuss and explain.

---