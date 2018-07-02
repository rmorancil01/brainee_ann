<?php

namespace backend\modules\geolocation\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\geolocation\models\Geolocation;

/**
 * GeolocationSearch represents the model behind the search form of `backend\modules\geolocation\models\Geolocation`.
 */
class GeolocationSearch extends Geolocation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['x_axis', 'y_axis', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Geolocation::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'x_axis', $this->x_axis])
            ->andFilterWhere(['like', 'y_axis', $this->y_axis])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
