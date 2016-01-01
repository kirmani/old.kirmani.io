$(function () {
  var INDENT = 2;
  var COMMANDS = ['cat', 'cd', 'edit', 'hello', 'help', 'ls', 'mail',
    'max', 'min'];
  DIRECTORY_VALUE = "DIRECTORY_VALUE";
  var DIRECTORY = {
    "about": "http://kirmani.io/about/",
    "blog": "http://kirmani.io/blog/",
    "github": "http://github.com/kirmani/",
    "linkedin": "http://linkedin.com/in/sekrim/",
    "resume": "http://kirmani.io/resume/",
    "twitter": "http://twitter.com/SeanKirmani",
  };

  var USER = 'guest';

  $("#term").hide();

  function sendMail(message) {
    var link = "mailto:sean@kirmani.io"
      + "?subject=" + escape("Kirmani Terminal Message")
      + "&body=" + escape(message)
      ;

    window.location.href = link;
  }

  function goToURL(url) {
    window.location = url;
  }

  $(document).keydown(function(e){
    if (e.keyCode == 192) {
      $("#term").slideToggle("fast");
    }
  });

  jQuery(function($, undefined) {
    $("#term").terminal(function(command, term) {
      var words = command.split(" ");
      func = words[0];
      var option = '';
      var parameter = '';
      for (i = 1; i < words.length; i++) {
        if (i % 2 == 1) {
          option = words[i];
          if (i + 1 < words.length) {
            parameter = words[i+1];
          }
        }
      }
      func = func.toUpperCase();
      switch (func)
      {
      case "HELP":
        for (var key in COMMANDS) {
          var help = "";
          for (var spaces = 0; spaces < INDENT; spaces++) {
            help += " ";
          }
          help += COMMANDS[key];
          term.echo(help);
        }
        break;
      case "HELLO":
        option = option.toUpperCase();
        if (option !== '') {
          switch (option)
          {
          case "-NAME":
            term.echo("Hello, " + parameter + "!");
            break;
          default:
            term.echo("Hello: Usage: hello [-name]");
            break;
          }
        } else {
          term.echo("Hello!");
        }
        break;
      case "MAIL":
        if (option !== '') {
          sendMail(option);
        } else {
          term.echo("Mail: Usage: mail [message]");
        }
        break;
      case "CAT":
        found = false;
        foundIndex = -1;
        for (i = 0; i < files.length; i++) {
          if (option == files[i]) {
            found = true;
            foundIndex = i;
          }
        }
        if (found) {
          var rawFile = new XMLHttpRequest();
          rawFile.open("GET", "files/" + option, true);
          rawFile.onreadystatechange = function ()
        {
          if(rawFile.readyState === 4)
          {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
              var allText = rawFile.responseText;
              term.echo(allText);
            }
          }
        }
          rawFile.send(null);
        } else {
          term.echo("File not found");
        }
        break;
      case "LS":
        for (var key in DIRECTORY) {
          var ls = "";
          for (var spaces = 0; spaces < INDENT; spaces++) {
            ls += " ";
          }
          ls += key + "/";
          term.echo(ls);
        }
        break;
      case "CD":
        if (option !== '') {
          option = option.toLowerCase();
          if (option in DIRECTORY) {
            goToURL(DIRECTORY[option]);
          } else {
            term.echo("cd: undefined: No such file or directory");
          }
          break;
        } else {
          term.echo("cd: undefined: No such file or directory");
        }
        break;
          case "DISPLAY":
            if (option !== '') {
              option = option.toUpperCase();
              switch (option) {
              case 'BLOG':
                if (parameter !== '') {
                  term.echo(items[parameter - 1]);
                } else {
                  term.echo(items[0]);
                }
                break;
              default:
                term.echo("Display: Usage: display [blog]");
                break;
              }
            } else {
              term.echo("Display: Usage: display [blog]");
            }
            break;
              case "MAX":
                $('#term').animate({height: window.innerHeight}, 500, function() {});
                break;
              case "MIN":
                $('#term').animate({height: 100}, 500, function() {});
                break;
              case "EDIT":
                goToURL(editURL);
                break;
              case "":
                break;
              default:
                try {
                  var result = window.eval(command);
                  if (result !== undefined) {
                    term.echo(new String(result));
                  }
                } catch(e) {
                  term.error(new String(e));
                }
                break;
      }
    }, {
      greetings: 'guest@kirmani:/$ cat welcome.txt\n'
        + 'Welcome to the UniXrim console.\n'
        + 'Use "ls", "cat", and "cd" to navigate the filesystem.',
      name: 'js_demo',
      prompt: USER + '@kirmani:/$ ',
      completion: function(terminal, command, callback) {
        callback(COMMANDS);
      },
      height: 100,
      keypress: function(e) {
        if (e.which == 96) {
          return false;
        }
      }
    });
  });
});
