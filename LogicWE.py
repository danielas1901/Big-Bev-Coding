#Get input information
import random
import smtplib
gmail_user = 'quickquit.help@gmail.com'
gmail_password = 'GeoBug42069'
sent_from = gmail_user;

class User():
    email = "";
    initPackNum = ""; # number of cigarette packs you smoke on a weekly basis
    quitTime = "" # amount of weeks you wish to be smoke free
    numWeeks = ''
    weekDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
    def __innit__ (self, email, initPackNum, quitTime, numWeeks):
        self.email = email;
        self.initPackNum = initPackNum;
        self.quitTime = quitTime;
        self.numWeeks = numWeeks;
    def getInfo (self):
        self.email = str(input("Enter your email\n"));
        self.initPackNum = int(input("Enter the amount of cigarette packs you smoke on a weekly basis\n"));
        self.quitTime = int(input("Enter the amount of months you have been an avide smoker\n"));
        self.numWeeks = int(input("Enter the number of weeks you wish to be smoke free\n"));

    def getEmail (self):
        self.email = input("Emter your email:\t");
    
    def send(self):
        to = ["averythomsen@icloud.ca", "danielsa1901@gmail.com"];
        subject = 'Thanks for joining QuickQuit!'
        body = "You now have access to the customizable calendar on our website!\nStart planning a healthier, happier life now!\n\nBest of luck!\nQuickQuit Team"
        email_text = """\
        From: %s
        To: %s
        Subject: %s
        %s
        """ % (sent_from, ", ".join(to), subject, body)
        try:
            smtp_server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
            smtp_server.ehlo()
            smtp_server.login(gmail_user, gmail_password)
            smtp_server.sendmail(sent_from, to, email_text)
            smtp_server.close()
            print ("Email sent successfully!")
        except Exception as ex:
            print ("Something went wrong….",ex)

user = User();
user.getInfo();
user.send();


if(user.initPackNum<=user.numWeeks):
    week = []
    weekDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
    reduction = 1

    for i in range(user.numWeeks):
        week.append(user.initPackNum)
        user.initPackNum = user.initPackNum-reduction
        roundP = round(user.initPackNum,2)

        #Find out how many packs you can smoke a week
        if(user.initPackNum<=0.1):
            print("\nIn week ",i+1," you will be allowed to smoke 0 packs\n","Congradulations, you are smoke free!")
            break
        print("\nIn week ",i+1," you will be allowed to smoke ",roundP,"packs\n")

        #Find out what days of the week you will be able to smoke
        packPerDay = roundP/5 #Divide packs to smoke across 5 days, 2 smoke free days
        noSmokeDays = []

        for k in range(2): #randomly generate 2 smoke free days
            randnum = random.randint(0,6)
            noSmokeDays.append(randnum)
        if(noSmokeDays[0]==noSmokeDays[1]): #if number generator gives 2 of the same values, just make the 2 days Monday and Thursday
            noSmokeDays[0] = 1
            noSmokeDays[1] = 3
        
        for j in range(7):
            if(j == noSmokeDays[0] or j == noSmokeDays[1]):
                print(weekDays[j],"= 0 packs\n")
            spackPerDay = round(packPerDay,1)
            print(weekDays[j],"=",spackPerDay, "packs\n")
    

            
        extra = int(input("\nPlease specify the amount of extra packs you smoked, if any during this week\n"))
        if(extra>0):
            reduction = 1 + (extra/4)
        else:
            reduction = 1
else:
    print("\nSorry, that time frame is not fesible, please slect a more generous time frame to assume a smooth transistion")

