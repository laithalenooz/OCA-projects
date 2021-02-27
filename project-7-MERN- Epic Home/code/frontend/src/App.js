import React from 'react';
import { Container, Navbar } from 'react-bootstrap';
import { BrowserRouter as Router, Route } from 'react-router-dom';

import Header from './components/Header';
import HomeScreen from './screens/HomeScreen';
import Footer from './components/Footer';
import ProductScreen from './screens/ProductScreen';
import CartScreen from './screens/CartScreen';
import LoginScreen from './screens/LoginScreen';
import RegisterScreen from './screens/RegisterScreen';
import ProfileScreen from './screens/ProfileScreen';
import ShippingScreen from './screens/ShippingScreen';
import PaymentScreen from './screens/PaymentScreen';
import PlaceOrderScreen from './screens/PlaceOrderScreen';
import OrderScreen from './screens/OrderScreen';
import UserListScreen from './screens/UserListScreen';
import UserEditScreen from './screens/UserEditScreen';
import ProductListScreen from './screens/ProductListScreen';
import ProductEditScreen from './screens/ProductEditScreen';
import OrderListScreen from './screens/OrderListScreen';
import HomeVideo from "./components/HeaderVideo";
import SubNav from "./components/SubNav";


const App = () => {
  return (
    <Router>
      <Header />
      <Route path={'/'} component={SubNav} exact />
      <Route path={'/page/:pageNumber'} component={SubNav} exact />
      <Route path={'/'} component={HomeVideo} exact />
      <Route path={'/page/:pageNumber'} component={HomeVideo} exact />
      <main className='py-3'>
        <Container style={{marginTop: 80}}>
          <Route path='/shipping' component={ShippingScreen} />
          <Route path='/order/:id' component={OrderScreen} />
          <Route path='/placeorder' component={PlaceOrderScreen} />
          <Route path='/payment' component={PaymentScreen} />
          <Route path='/login' component={LoginScreen} />
          <Route path='/register' component={RegisterScreen} />
          <Route path='/profile' component={ProfileScreen} />
          <Route path='/product/:id' component={ProductScreen} />
          <Route path='/cart/:id?' component={CartScreen} />
          <Route path='/admin/userlist' component={UserListScreen} />
          <Route path='/admin/user/:id/edit' component={UserEditScreen} />
          <Route
            path='/admin/productlist'
            component={ProductListScreen}
            exact
          />
          <Route path='/admin/product/:id/edit' component={ProductEditScreen} />
          <Route
            path='/admin/productlist/:pageNumber'
            component={ProductListScreen}
            exact
          />
          <Route path='/admin/orderlist' component={OrderListScreen} />
          <Route path='/search/:keyword' component={HomeScreen} exact />
          <Route path='/page/:pageNumber' component={HomeScreen} />
          <Route
              path='/search/:keyword/page/:pageNumber'
              component={HomeScreen}
          />
          <Route path='/' component={HomeScreen} exact />
        </Container>
      </main>
      <Footer />
    </Router>
  );
};

export default App;
