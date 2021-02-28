import bcrypt from 'bcryptjs';

const users = [
  {
    name: 'Admin User',
    email: 'admin@example.com',
    password: bcrypt.hashSync('123456', 10),
    isAdmin: true,
  },
  {
    name: 'Laith Al Enooz',
    email: 'laith@example.com',
    password: bcrypt.hashSync('123456', 10),
  },
  {
    name: 'Adam Abu Samra',
    email: 'adam@example.com',
    password: bcrypt.hashSync('123456', 10),
  },
];

export default users;
