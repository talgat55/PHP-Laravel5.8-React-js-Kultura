import React, {Component} from 'react';
import {render} from 'react-dom';
import {Provider} from 'react-redux';
import {compose, createStore, applyMiddleware} from "redux";
import createSagaMiddleware from 'redux-saga'
import { introSaga } from './sagas/sagas'
import {rootReducer} from "./redux/rootReducer";

export default class Client extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>
                            adwdawd
                            <div className="card-body">I'm an example component!</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

const saga = createSagaMiddleware();


const store = createStore(
    rootReducer,
    compose(
        applyMiddleware(
            saga,
        ),
        window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()

    )
);
saga.run(introSaga);
render(
    <Provider store={store}>
        <Client/>
    </Provider>
    , document.getElementById('root'));

