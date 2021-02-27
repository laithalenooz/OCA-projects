import React, { useState } from 'react';
import { Button, Card, Form } from 'react-bootstrap';
import { withRouter, Link } from 'react-router-dom';

const Product = ({ product, history }) => {
    const [qty, setQty] = useState(1);
    const addToCartHandler = (pID) => {
        const id = pID.target.value
        console.log(id)
        history.push(`/cart/${id}?qty=${qty}`);
    };

  return (
    <Card className='my-3 p-3 rounded'>
      <Link to={`/product/${product._id}`}>
        <Card.Img src={product.image} style={{ height: 170 }} />
      </Link>

      <Card.Body>
        <Link to={`/product/${product._id}`}>
          <Card.Title as='div' style={{ height: 50 }}>
            <strong>{product.name}</strong>
          </Card.Title>
        </Link>

        <Card.Text as='div'>
          <div className='my-1'>
            {product.description.slice(0, 37)}...
          </div>
        </Card.Text>

          <Card.Text as='h3'>${product.price}</Card.Text>

          <Form.Control
              as='select'
              size={"sm"}
              value={qty}
              onChange={(e) => setQty(e.target.value)}
              custom
          >
              {[...Array(product.countInStock).keys()].map(
                  (x) => (
                      <option key={x + 1} value={x + 1}>
                          {x + 1}
                      </option>
                  )
              )}
          </Form.Control>

          <Button
              onClick={addToCartHandler}
              className='mt-2'
              value={product._id}
              type='button'
              active={product.countInStock > 0}
              disabled={product.countInStock === 0}
          >
              Add To Cart
          </Button>

      </Card.Body>
    </Card>
  );
};

export default withRouter(Product);
