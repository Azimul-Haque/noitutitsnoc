set INTERVAL=3
:loop
git pull
git add --all
git commit -a -m "Rifat: Commit %date% %time% %random%"
git push

timeout %INTERVAL%
goto:loop
