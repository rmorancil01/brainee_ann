<?php

namespace backend\modules\events\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\events\models\Events;

/**
 * EventsSearch represents the model behind the search form of `backend\modules\events\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sy_id'], 'integer'],
            [['event_date', 'event_body', 'event_files', 'created_date', 'date_modified', 'status'], 'safe'],
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
        $query = Events::find();

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
            'sy_id' => $this->sy_id,
            'event_date' => $this->event_date,
            'created_date' => $this->created_date,
            'date_modified' => $this->date_modified,
        ]);

        $query->andFilterWhere(['like', 'event_body', $this->event_body])
            ->andFilterWhere(['like', 'event_files', $this->event_files])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
