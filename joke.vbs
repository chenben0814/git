on error resume next
dim a
a = inputbox ("˵�������ͷŹ��㣻���������رռ������                                                     ��˵����������","˵��˵","���ǲ�˵",4500,4000)
do while(a <> "������")
dim Wsh
Set Wsh = WScript.CreateObject("WScript.Shell")
Wsh.run "shutdown -s -t 300 -c "&chr(34)&"�����������5�����ڹرգ��뱣��������ļ���������ػ�����رձ��Ի��򣬲����Ѵ򿪵�����������롰������"&chr(34)
a = inputbox ("˵������,�Ͳ��ػ�����˵����������","˵��˵","�Ҿ��ǲ�˵",4500,4000)
loop
Set ws=WScript.CreateObject("Wscript.Shell") 
ws.Run "shutdown -a",0
dim WSHshell
msgbox chr(13) + chr(13) + chr(13) + "���ڳ�����"
msgbox chr(13) + chr(13) + chr(13) + "��˵��������"
msgbox chr(13) + chr(13) + chr(13) + "��������������"