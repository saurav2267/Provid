import React, { Component } from "react";
import _ from "lodash";
import { get_sources } from "./services/newsapi";

import NewsItemContainer from "./components/NewsItemContainer";

import "./App.css"
class App extends Component {
  state = {
    sources: []
  };

  async componentDidMount() {
    const _sources = await get_sources();

    this.setState({ sources: _.sampleSize(_sources, 3) });
  }

  render() {
    const header_style = {
      textAlign: "center"
    };

    return (
      <div className="container-fluid">
        <div className="m-5" style={header_style}>
          <h1>PRO<span class="m-6">V</span>ID-N<span class="m-6">E</span>WS</h1>
        </div>

        <div className="d-flex justify-content-between flex-wrap m-4">
          {this.state.sources.map((source, index) => (
            <NewsItemContainer source={source} key={index} />
          ))}
        </div>
      </div>
    );
  }
}

export default App;