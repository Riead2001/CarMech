Brothers Mechanic Ltd.

- This project was made to submit as course work of CSE 391 Assignment-3

- Apache, MySQL and PHP is used to create the project.
      
The system has 2 parts.
  1. User Panel
      a. A client visiting to the web application should be able to entry their Name, Phone, Car Color, Car License number, Car Engine Number, appointment date 
          and can select their desire mechanic from the list of the available mechanics. 
  2. Admin Panel
      a. Admin can see the list of the appoints
        i. In the list table admin should able to see the client name, phone, Car  registration number, appointment date, and mechanic name.
        ii. List of mechanics and their daily count of car they can process.
    b. Process list 
        i. If admin wants he can change the date of appointment and also the assigned mechanic name with any other available mechanic for any  specific client.
        ii. Admin can add/remove mechanic and their daily count of car they can work on

- Database structure

  - There are three tables to make the project workable,
  <
  - `Admin`:
    → name
    → email
    → password
    → modifiedAt
    
  - `Appointment`:
    → firstname
    → lastName
    → phone number
    → vehicle type
    → vehicle number
    → vehicle model
    → vehicle year
    → appointment date
    → mechanic
    
  - `Users`:
    → firstname
    → lastname
    → email
    → phone number
    → password

    >

A well structured database is kept inside **database/apache.sql**
