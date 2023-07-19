
# Zavrsni v3

## 1.)
https://dbdiagram.io/d/64ab200902bd1c4a5ec23937

![sql](/sql.jpg)

```sql
table users as U {
  id bigint [pk]
  name varchar
  email varchar
  password varchar
  created_at timestamp
  edited_at timestamp
  passowrd varchar
  role_id bigint
}

table roles {
  id bigint
  name varchar
  created_at timestamp
  edited_at timestamp
}


ref: U.role_id > roles.id

table pages as P {
  id bigint
  name varchar
  slug varchar
  text text
  img varchar
  created_at timestamp
  edited_at timestamp
  
}
ref: P.id > nav_menus.page_id

table nav_menus {
  id bigint
  name varchar
  page_id bigint
  created_at timestamp
  edited_at timestamp
  deleted_at timestamp
}
```