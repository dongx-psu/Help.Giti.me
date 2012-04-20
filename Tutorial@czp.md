-	__新手上路__  
	这一部分会教给您最基本的git操作：  
	*	建立一个您自己的版本库（repository），以下命令在git bash或terminal中完成  
		首先建立一个文件夹用于存放程序，您可以使用图形界面完成这一任务，也可以使用基本bash语句（$符号不需要您输入）：  
			新建一个名为repo的文件夹，该文件夹名将作为版本库名 `$ mkdir repo`  
			进入该文件夹 `$ cd repo`  
		然后在本地建立版本库，请在bash或terminal中执行以下语句 `$ git init`  
		通常，我们还会建立一个README文件简单描述当前版本库，可以在图形界面中完成这一任务，也可以使用bash语句： `$ touch README`  
		至此，我们在本地创立了一个版本库并创建了一个文件，接下来，我们需要将该版本库提交到服务端  
	*	降版本库提交至服务端  
		使用`$ git remote add origin git@giti.me:username/repo.git`将版本库提交至服务端，该命令中username为您在giti.me的用户名，repo为版本库名，即上一步中建立的文件夹名  
		使用`ssh git@giti.me expand`命令查询您可访问的版本库以及授权信息，可以看到您刚刚创建的版本库已出现在其中  
		此时，由于未将README加入本地版本库，所以README既不在本地版本库中，也不在服务端版本库中  
	*	提交修改至本地版本库  
		将版本库修改提交到服务端之前，先将修改加入本地版本库的索引文件(index file)  
		如果需要增加文件至本地版本库，可使用`$ git add`命令，我们已经在本地磁盘增加了README文件，将该文件增加至版本库时，使用`$ git add README`命令即可  
		当您在本地磁盘增加了很多文件时，可以使用`$ git add .`命令，将所有新增文件提交至版本库  
		最后，使用`$ git commit -m "first commit"`命令完成操作，-m后的字符串中的内容应简要指明您所做的修改  
		如果简单地使用`$ git commit`，会自动打开文本编辑器vi提示您指明所做修改，因此建议不会使用vi的用户不要省略-m  
	*	提交至服务端
		使用如下命令即可将本地版本库同步至服务端版本库  
		`$ git push origin master`或`$ git push`  
	*	注：本文未说明在以上操作中的origin和master所代表的含义，如果您想了解更多，请查阅其他资料  
-	__基本操作__  
	经过上一部分所介绍的操作后，您已经有了一个完整的版本库，这一部分介绍的操作能够使您操纵git完成版本控制的功能  
	*	在本地版本库中增加、删除、移动文件  
		首先，请在git bash或terminal中，移动到您想操作的版本库文件夹中  
		*	将文件加入本地版本库，file为文件名 `$ git add file`  
		*	删除，file为文件名，加--cached表示仅从index file中删除文件，即放弃跟踪 `$ git rm file [--cached]`  
		*	移动/更名，src为源文件，dest为目标文件 `$ git mv src dest`  
		在执行上述操作之后，不要忘记使用`$ git commit`提交到本地版本库，然后可以使用`$ git push`提交到服务端  
	*	克隆版本库  
		如果您不幸丢失本地版本库，可以用`$ git clone`命令从服务端获取版本库  
		首先，在git bash或terminal中，移动到您想要放置版本库的文件夹下，执行如下命令：  
		`$ git clone git@giti.me:username/repo.git`  
		其中username为您在giti.me的用户名，repo为版本库名  
		最后，请查看并确认版本库是否出现在您希望的地方  
	*	操作服务端版本库  
		上面的内容已经提到了一个操作服务端版本库的命令：  
		*	添加远程仓库，username为您在giti.me的用户名，repo为版本库名 `$ git remote add origin git@giti.me:username/repo.git`  
		其他命令，如：  
		*	显示远程仓库，加-v选项可显示仓库地址 `$ git remote [-v]`  
		*	更名，old_name为原版本库名，new_name为新名字 `$ git remote rename old_name new_name`  
		*	删除远程仓库，repo_name为版本库名 `$ git remote rm repo_name`  
		*	查看远程仓库信息，repo_name为版本库名 `$ git remote show repo_name`  
