import React from 'react';
import Title from "../Title/Title";
import styled from 'styled-components';
import PropTypes from 'prop-types';
import Item from "./Item";
const CultureDetailsPage = ({data}) => {

    return (
        <CultureDetailsPageComponent>
            <div className="container">
                <div className="row">
                    <Title
                        title="Культура в деталях"
                    />
                </div>
                <div className="row">
                    <ul className="culture-details-list row">
                        {
                            data.map((item, index) => (
                                <Item
                                    key={index}
                                    name={item.name}
                                    image={item.image}
                                    slug={item.slug}
                                    anons={item.anons}
                                    date={item.publish_date}
                                />
                            ))
                        }
                    </ul>
                </div>
            </div>
        </CultureDetailsPageComponent>
    )
};
CultureDetailsPage.propTypes = {
    data: PropTypes.object.isRequired
};
const CultureDetailsPageComponent = styled.section`
  margin: 40px 0;
  .culture-details-list{
    margin: 0;
    padding: 0;
    li{
      list-style: none;
    }
  }
`;

export default  CultureDetailsPage;