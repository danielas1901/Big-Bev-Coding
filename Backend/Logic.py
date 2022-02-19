#Get input information

packs = int(input("Enter the amount of cigarette packs you smoke on a weekly basis\n"))
smokerYears = int(input("Enter the amount of months you have been an avide smoker\n"))
quit = int(input("Enter the amount of weeks you wish to be smoke free\n"))

if(packs<=quit):

    weekNum = quit
    

    week = []
    reduction = 1

    for i in range(weekNum):
        week.append(packs)
        packs = packs-reduction
        roundP = round(packs,2)
        if(packs<=0.1):
            print("\nIn week ",i+1," you will be allowed to smoke 0 packs\n","Congradulations, you are smoke free!")
            break
        print("\nIn week ",i+1," you will be allowed to smoke ",roundP,"packs")
        extra = int(input("\nPlease specify the amount of extra packs you smoked, if any during this week\n"))
        if(extra>0):
            reduction = 1 + (extra/3)
        else:
            reduction = 1

else:
    print("\nSorry, that time frame is not fesible, please slect a more generous time frame to assume a smooth transistion")


