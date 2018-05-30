# Students Database
 We can use both
 <i>Laravel PHP Web Application Framework</i> and 
 <i>Angular Popular Front End Framework</i>,
so they can interact with each other via an <i>API</i>.
We simply build one interface in
 <i>Angular 4 Application</i> and then call an <i>API</i> to 
 <i>store</i>, <i>retrieve</i>, <i>update</i> and <i>delete</i> the data.


## Prerequisites
<ul>
    <li>
       Laravel 5
    </li>
    <li>
       Apache
    </li>
    <li> 
       MySQL
    </li>
    <li>
       PHP, Composer installed.
    </li>
</ul>

## Run the site
 After you have cloned or downloaded the project, navigate to the corresponding directory
  <ul>
     <li>
     Install all the dependencies as specified in the <i>composer.lock</i> file (in your terminal). <br/>
     cd laravel-angular-4-app <br/>
     composer install 
     </li>
     <li>Copy the <i>.env.example</i> file to the <i>.env</i> file, and set the corresponding keys</li>
     <li> Run the site <br/> php artisan serve --host=your_host --port=your_port <br/> Alternatively, create a virtual host. <br/>
     </li>
     <li>Execute the <i>migrations</i> and run the <i>seeders</i> <br/> php artisan migrate
     </li>
  </ul>

## API
Site gives the following <i>API</i>:

<ul>
   <li>
     Retrieves the list of all students: <br/>
     GET http://{your-domain}/api/v1/students/  
  </li>
  <li>
     POST Updates the current student: <br/>
     http://{your-domain}/api/v1/students/{id}<br/>
     <br/>
     <i><u>URI Parameters</u> </i><br/>
     id: Required, identifier of student<br/><br/>
     <i><u>Request Body Attributes:</u> </i><br/>
     <i>Name:</i> Required, string <br/>
     <i>Email:</i> Required, string <br/>
     <i>Admission date:</i> Required, string <br/>
     <i>Faculty:</i> Required, string <br/>
     <i>Major:</i> Required, string <br/>
     <i>Country:</i> Not Required, string <br/>
     <br/>
  </li>
  <li>
     POST Adds a new student: <br/>
     http://{your-domain}/api/v1/students/<br/>
     <br/>
     <i><u>Request Body Attributes:</u> </i><br/>
     <i>Name:</i> Required, string <br/>
     <i>Email:</i> Required, string <br/>
     <i>Admission date:</i> Required, string <br/>
     <i>Faculty:</i> Required, string <br/>
     <i>Major:</i> Required, string <br/>
     <i>Country:</i> Not Required, string <br/>
     <br/>
  </li>
  <li>
    Deletes a student by id: <br/>
    DELETE http://{your-domain}/api/v1/students/{id}<br/><br/>
    <i><u>URI Parameters</u> </i><br/>
    id: Required, identifier of student<br/><br/>
  </li>
</ul>