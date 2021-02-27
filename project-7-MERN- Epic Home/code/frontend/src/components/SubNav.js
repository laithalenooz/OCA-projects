import React from 'react';
import {LinkContainer} from "react-router-bootstrap"
import { Navbar, Nav, Container } from 'react-bootstrap';

const SubNav = () => {
    return (
        <header>
            <Navbar variant='dark' expand='lg' collapseOnSelect style={{paddingTop: 80, backgroundColor: '#2f333a'}}>
                <Container>
                    <Navbar.Toggle aria-controls='basic-navbar-nav' />
                    <Navbar.Collapse id='basic-navbar-nav'>
                        <Nav className='mx-auto mt-1 justify-content-between' style={{fontSize: '1rem'}}>
                            <LinkContainer to='/'>
                                <Nav.Link>
                                    Home
                                </Nav.Link>
                            </LinkContainer>
                            <LinkContainer to='!#'>
                                <Nav.Link>
                                    About Us
                                </Nav.Link>
                            </LinkContainer>
                            <LinkContainer to='!#'>
                                <Nav.Link>
                                    Contact Us
                                </Nav.Link>
                            </LinkContainer>
                            <LinkContainer to='/profile'>
                                <Nav.Link>
                                    Profile
                                </Nav.Link>
                            </LinkContainer>
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </header>
    );
};

export default SubNav;
