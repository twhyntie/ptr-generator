#PTR Generator

A script for generating PTR XML files with a web portal written in Python and PHP. All of the processing work is done in *ptrgenerator.py*, which interfaces with the web through passing command line arguments to the python file. *ptrgenerator-terminal.py* can be used for a more human-friendly experience in the terminal.

##Usage

The script will work out of the box on a web server running Python 2.7+ and PHP 5. To use the command line version, simply type
    python ptrgenerator-terminal.py


###Interfacing with other software
To interface the generator script with other software, call the ptrgenerator.py file with 25 command line arguments, these are detailed fully in comments in the source.

##Other Files Included

- /prism/* : [PrismJS](http://prismjs.com/) library for syntax highlighting the generated code.
- Fonts: League Gothic and Open Sans, for use on the page.

