<?php

namespace backend\modules\braineeabouts\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\braineeabouts\models\BraineeAboutUs;

/**
 * BraineeaboutsSearch represents the model behind the search form of `backend\modules\braineeabouts\models\BraineeAboutUs`.
 */
class BraineeaboutsSearch extends BraineeAboutUs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'school_id', 'status'], 'integer'],
            [['mission', 'vision', 'school_address', 'school_contact', 'school_email', 'school_website', 'school_fb', 'school_ig', 'school_twitter', 'geo_x', 'geo_y', 'created_date', 'date_modified'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = BraineeAboutUs::find();

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
            'school_id' => $this->school_id,
            'created_date' => $this->created_date,
            'date_modified' => $this->date_modified,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'mission', $this->mission])
            ->andFilterWhere(['like', 'vision', $this->vision])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_contact', $this->school_contact])
            ->andFilterWhere(['like', 'school_email', $this->school_email])
            ->andFilterWhere(['like', 'school_website', $this->school_website])
            ->andFilterWhere(['like', 'school_fb', $this->school_fb])
            ->andFilterWhere(['like', 'school_ig', $this->school_ig])
            ->andFilterWhere(['like', 'school_twitter', $this->school_twitter])
            ->andFilterWhere(['like', 'geo_x', $this->geo_x])
            ->andFilterWhere(['like', 'geo_y', $this->geo_y]);

        return $dataProvider;
    }
}
