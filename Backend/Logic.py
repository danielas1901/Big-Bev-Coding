#Get input information

packs = int(input("Enter the amount of cigarette packs you smoke on a weekly basis\n"))
smokerYears = int(input("Enter the amount of months you have been an avide smoker\n"))
quit = int(input("Enter the amount of weeks you wish to be smoke free\n"))

if(packs<quit):

    weekNum = quit
    packs = packs - 1

    week = []

    for i in range(weekNum):
        week.append(packs)
        packs = packs-1
        if(packs<0):
            break
        print("In week ",i," you will be allowed to smoke ",packs,"packs")

else:
    print("Sorry, that time frame is not fesible, please slect a more generous time frame to assume a smooth transistion")


