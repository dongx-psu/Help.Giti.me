Giti.me User Tutorial
=====================

科普区
------
-	__什么是Git？__  
	Git是一个由林纳斯·托瓦兹为了更好地管理linux内核开发而创立的分布式版本控制／软件配置管理软件。  
	For more: [Git on wikipedia](http://zh.wikipedia.org/wiki/Git)
-	__什么是Giti.me?__  
	Giti.me是由ACM IWG搭建的基于SSH协议的ACM班内部Git服务。旨在提供班级内部的版本控制服务。
-	__什么是SSH协议?__  
	SSH为Secure Shell的缩写，由IETF的网络工作小组（Network Working Group）所制定；SSH为建立在应用层和传输层基础上的安全协议。Giti.me服务借由SSH协议进行用户认证以及为Git提供远程读写操作。  
	For more: [SSH on wikipedia](http://zh.wikipedia.org/zh-cn/SSH)

Giti.me配置快速入门
-------------------
-	__准备工作__  
	首先确认已安装git客户端，如果没有安装，请执行以下操作：
	* 对于Windows用户：下载并安装最新版本的[Git for Windows](http://code.google.com/p/msysgit/downloads/list)
	* 对于Linux，OSX用户：安装git，例如：Ubuntu用户请在Terminal运行`sudo apt-get install git`
-	__连接到Giti.me服务__  
	以下命令，Windows用户请在Git Bash中完成操作，Linux和OSX用户请在Terminal中完成操作。  
	1.	**检查是否已经生成了SSH Key**  
		`cd ~/.ssh`  
		如果显示"No such file or directory"请跳到步骤2，否则跳到步骤3。  
		**P.s. ~目录为用户根目录；对于windows用户，该目录为（windows vista以上版本为c:\\users\\*NAME*\\，windows xp以下版本为c:\\documents and settings\\my documents\\）；对于Linux用户，该目录为/home/_NAME_/；对于Mac用户，该目录为/Users/_NAME_/**  
	2.	**生成新的SSH Key**  
		执行如下命令以生成新的SSH Key  
		`ssh-keygen -t rsa -C "yourname@youremail.com"`  
		正确填写保存目录和passphrase。（建议不修改默认目录，即第一个填写项直接回车以取为默认值）  
	3.	**上传SSH Key到Giti.me**   
		登录Giti.me，选择添加SSH Key。将您生成好的Public Key复制到标识为key的文本框中，并为它起一个标题。最后点击Add Key以保存SSH Key。  
		**P.s. Public key储存在pub类型文件中，如果在生成时使用默认位置，那么该文件位于~/.ssh/id_rsa.pub，可以使用notepad或gedit等文本编辑工具打开它以复制其内容**  
	4.	**尝试连接到Giti.me服务**  
		运行`$ ssh -T git@giti.me`，若您看到了欢迎信息和版本库授权信息，则说明您的配置成功了。  
	5.	**设置您的个人信息**  
		运行如下命令来修改您在Giti.me服务中的名字和Email  
		`git config --global user.name "Your Name"`  
		`git config --global user.email your_email@youremail.com`  
Giti.me常用命令
---------------
- 	__查询您可访问的版本库以及授权信息__    
	`ssh git@giti.me expand`  
-	__查询您的系统授权__    
	`ssh git@giti.me info`  
-	__建立一个新的版本库__  
	**以下命令将为您建立一个包含了一个空的README文件的版本库。**  
	首先请先cd到您的版本库文件夹（建议将您的git版本库集中到一起以方便维护）  
	`mkdir REPO`  
	`cd REPO`
	`git init`  
	`touch README`  
	`git add README`    
	`git commit -m "first commit"`  
	`git remote add origin git@giti.me:USERNAME/REPO.git`  
	`git push origin master`  
- 	__获取已有的版本库__  
	对于您自己创建的版本库，请运行：  
	`git clone git@giti.me:USERNAME/REPO.git`  
	对于系统授权给您的可读版本库，请运行：  
	`git clone git@giti.me:REPO.git`  
-	__提交一次修改__  
	-	在您对版本库进行修改之后（添加、删除或修改文件），您可以通过以下命令将修改提交。  
		`git commit -a`  
		然后您的Terminal/Git Bash将会让您打开Vi文本编辑器请您本次提交的Commit log。此时按I键即可开始编辑，编辑完成后请按Esc键，输入命令`:wq`即可保存编辑好的commit log。  
	-	上面的命令将会直接检查版本库内的所有修改，并将其添加到提交队列当中。  
		您也可以单独对版本库当中的某个文件提交添加、修改或者删除操作  
		添加或修改：`git add FILENAME`  
		删除：`git rm FILENMAE`  
		然后您可以运行`git commit -m "COMMIT LOG"`来进行操作的提交。  
		接下来执行`git push origin master`，即可将您提交的修改推送到服务端。    
-	__更新本地版本库__  
	`git pull origin master`  
-	__推荐资料__  
	想学习更多有关Git命令和原理的知识，您可以访问：  
	*	[使用 Git 管理源代码](http://www.ibm.com/developerworks/cn/linux/l-git/)
	*	[Pro Git](http://progit.org/book/zh/)
-	__Git命令速查表__  
	[![Git命令速查](cheatsheet.png)](cheatsheet.png)