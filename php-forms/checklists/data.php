<?php
	/*
		Checklists — add a new one by copying a block below.
		Each item's key (like "printing") is what gets saved when you check it off.
	*/

	$checklists = [
		"php-basics" => [
			"title" => "PHP Basics",
			"items" => [
				"printing" => [
					"label" => "I can print things to the screen with PHP",
					"note" => "Hint: it's a keyword. There are other ways too, so find them.",
					"practice" => "practice/printing.php",
				],
				"statements" => [
					"label" => "I know what a statement is",
					"note" => "A statement ends with a ; the way a sentence ends with a period.",
					"practice" => "practice/statements.php",
				],
				"math" => [
					"label" => "I can do some basic math",
					"note" => "Real basic stuff.",
					"practice" => "practice/math.php",
				],
				"strings" => [
					"label" => "I can combine strings by joining them together",
					"note" => "Spaces are part of strings too.",
					"practice" => "practice/strings.php",
				],
				"variables" => [
					"label" => "I can store something in memory and use it later",
					"note" => "Type them out until they're second nature. Watch for the $.",
					"practice" => "practice/variables.php",
				],
				"combinations" => [
					"label" => "I tried a whole bunch of combinations of everything",
					"note" => "Be the learning.",
					"practice" => "practice/combinations.php",
				],
				"madlib" => [
					"label" => "I completed my Mad Lib",
					"note" => "Put it on the web, share the link, and link to it from your site.",
					"practice" => "04-mad-lib/",
				],
			],
		],

		"program-logic" => [
			"title" => "Program Logic",
			"items" => [
				"keywords" => [
					"label" => "I can tell keywords from names I chose",
					"note" => "Keywords are reserved by the language (if, else, echo, true). Variables are yours.",
					"practice" => "practice/keywords.php",
				],
				"operators" => [
					"label" => "I've tried the comparison and logical operators",
					"note" => "> < >= <= == != and && || !. What does each one give back?",
					"practice" => "practice/operators.php",
				],
				"booleans" => [
					"label" => "I understand booleans",
					"note" => "true or false. A comparison like \$a > \$b gives back a boolean.",
					"practice" => "practice/operators.php",
				],
				"if-else" => [
					"label" => "I can write if / elseif / else",
					"note" => "The block runs only when the (condition) is true.",
					"practice" => "practice/if-else.php",
				],
				"tip-logic" => [
					"label" => "I spotted (and fixed) the problem in the tip logic",
					"note" => "Conditions are checked top to bottom, and the first true one wins.",
					"practice" => "practice/tip-logic.php",
				],
			],
		],

		"arrays-loops" => [
			"title" => "Looping Through Arrays",
			"items" => [
				"lesson" => [
					"label" => "I followed the lesson and did the in-video challenges",
					"note" => "About 90 minutes. Pause and do the challenges.",
					"practice" => "practice/arrays-loops/",
				],
				"brief" => [
					"label" => "I read the monster adoption brief",
					"note" => "About 15 minutes. Check your email for the link, and save the pictures to monster-adoption/images.",
					"practice" => "monster-adoption/notes.md",
				],
				"style-tile" => [
					"label" => "I made a style tile for the monster adoption site",
					"note" => "About 30 minutes. What really needs to be included? Lists? Headings? Buttons? Images?",
					"practice" => "monster-adoption/style-tile.php",
				],
				"into-code" => [
					"label" => "I got the style tile into code",
					"note" => "About 40 minutes. Reuse your lesson code and add a little style. Have fun.",
					"practice" => "monster-adoption/",
				],
			],
		],

		"functions" => [
			"title" => "Functions",
			"items" => [
				"lesson" => [
					"label" => "I watched the video and did the challenges",
					"note" => "About 130 minutes. How long did it really take? Write it down and report back.",
					"practice" => "practice/functions/",
				],
				"syntax" => [
					"label" => "I can define a function and call it",
					"note" => "function keyword + a name. A recipe that only runs when you call it.",
					"practice" => "practice/functions/",
				],
				"scope" => [
					"label" => "I understand scope",
					"note" => "Each function has its own refrigerator. It can't see the \$variables outside it.",
					"practice" => "practice/functions/scope.php",
				],
				"parameters" => [
					"label" => "I know parameters from arguments",
					"note" => "Parameters are the slots you plan. Arguments are the values you pass in when you call it.",
					"practice" => "practice/functions/",
				],
				"return" => [
					"label" => "I understand return values",
					"note" => "return hands a value back and ends the function right there. echo just prints.",
					"practice" => "practice/functions/return.php",
				],
				"built-in" => [
					"label" => "I've used built-in functions and looked them up in the manual",
					"note" => "Try phpinfo(). Find 3 built-ins you've already used without noticing.",
					"practice" => "practice/functions/built-in.php",
				],
				"where-php" => [
					"label" => "I wrote about where PHP will be useful in my projects",
					"note" => "About 20 minutes. Partials, variables, arrays, loops, functions: which projects need which?",
					"practice" => "practice/functions/where-php.md",
				],
				"in-the-wild" => [
					"label" => "I found PHP use-cases in the wild",
					"note" => "About 30 minutes. Take screenshots and say what PHP would do there.",
					"practice" => "practice/functions/in-the-wild.md",
				],
			],
		],
	];
