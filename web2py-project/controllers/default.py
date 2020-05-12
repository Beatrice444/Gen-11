def register():
    return dict()

def store():
    submitted_firstname = request.vars.firstname
    submitted_lastname = request.vars.lastname
    submitted_email = request.vars.email
    submitted_password = request.vars.password
    submitted_contact = request.vars.contact
    submitted_location = request.vars.location

    results = db.users.insert(
         db_firstname=submitted_firstname,
         db_lastname = submitted_lastname,
         db_email = submitted_email,
         db_password = submitted_password,
         db_contact = submitted_contact,
         db_location = submitted_location
    )
    
    if results:
        return "User Saved Successfully"
    else:
        return "An Error Occurred"

def seeUsers():
    users = db().select(db.users.ALL)
    return dict(users=users)
def login():
    return dict()

def authenticate():
    submitted_email=request.vars.email
    submitted_password=request.vars.password

    if db(db.users.db_email==submitted_email
          and db.users.db_password==submitted_password).count()>0:
        return "User Logged In Successfully"
    else:
        return "User Nott Found. Please Sign up"

def edit():
    return dict()
def update():
    submitted_firstname=request.vars.firstname
    submitted_lastname=request.vars.lastname
    submitted_password=request.vars.password
    submitted_contact=request.vars.contact
    submitted_location=request.vars.location
    submitted_id=request.vars.id

    if db(db.users.id==submitted_id).select():
        db(db.users.id==submitted_id).update(
            db_firstname=submitted_firstname,
            db_lastname=submitted_lastname,
            db_password=submitted_password,
            db_contact=submitted_contact,
            db_location=submitted_location
            
            )
        return "User Updated Successfully"
    else:
        return 'No User with the ID found'
def delete():
    parameters=request.args
    submitted_id=parameters[0]
    if db(db.users.id==submitted_id).select():
        db(db.users.id==submitted_id).delete()
        return "User Deleted Successfully"
    else :
        return "No User with the ID Found"

        